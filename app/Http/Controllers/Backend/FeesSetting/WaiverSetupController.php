<?php

namespace App\Http\Controllers\Backend\FeesSetting;

use App\Http\Controllers\Controller;
use App\Models\AddClass;
use App\Models\AddFees;
use App\Models\AddGroup;
use App\Models\AddSection;
use App\Models\AddWaiverType;
use App\Models\Student;
use App\Models\Waiver;
use Illuminate\Http\Request;

class WaiverSetupController extends Controller
{
    public function WaiverSetupView(Request $request, $school_code)
    {
        $classes = AddClass::where("school_code", $school_code)->where('action', 'approved')->get();
        $groups = AddGroup::where("school_code", $school_code)->where('action', 'approved')->get();
        $sections = AddSection::where("school_code", $school_code)->where('action', 'approved')->get();
        $waiverTypes = AddWaiverType::where("school_code", $school_code)->where('action', 'approved')->get();

        // session data
        $sessionStudents = $request->session()->get('students');
        $sessionAllFees = $request->session()->get('allFeesAccordingToClass');
        $sessionClass = $request->session()->get('class');
        $sessionGroup = $request->session()->get('group');
        $sessionSection = $request->session()->get('section');
        $sessionWaiver_type = $request->session()->get('waiver_type');
        $sessionPercentage = $request->session()->get('percentage');
        $sessionPercentageAmounts = $request->session()->get('percentageAmounts');

        return view(
            'Backend.BasicInfo.FeesSetting.WaiverSetup',
            compact(
                'classes',
                'groups',
                'sections',
                'school_code',
                'waiverTypes',
                'sessionStudents',
                'sessionAllFees',
                'sessionClass',
                'sessionGroup',
                'sessionSection',
                'sessionWaiver_type',
                'sessionPercentage',
                'sessionPercentageAmounts',
            )
        );
    }



    public function WaiverSetupGetData(Request $request, $school_code)
    {
        $class = $request->input('class');
        $group = $request->input('group');
        $section = $request->input('section');
        $waiver_type = $request->input('waiver_type');
        $percentage = $request->input('percentage');

        $students = Student::where("school_code", $school_code)
            ->where('action', 'approved')
            ->where('Class_name', $class)
            ->where('group', $group)
            ->where('section', $section)
            ->get();


        $allFeesAccordingToClass = AddFees::where("school_code", $school_code)
            ->where('action', 'approved')
            ->where('Class_name', $class)
            ->where('group_name', $group)
            ->get();

        $percentageAmounts = [];
        foreach ($allFeesAccordingToClass as $value) {
            $percentageAmounts[$value->id] = ($value->fee_amount / 100) * floor(intval($percentage));
        }

        return redirect()->route('waiverSetup.view', $school_code)->with([
            'students' => $students,
            'allFeesAccordingToClass' => $allFeesAccordingToClass,
            'class' => $class,
            'group' => $group,
            'section' => $section,
            'waiver_type' => $waiver_type,
            'percentage' => $percentage,
            'percentageAmounts' => $percentageAmounts,
        ]);
    }



    public function WaiverStudentListSetup(Request $request, $school_code)
    {
        // dd($request->all());

        // $class = $request->input('student_class');
        // $group = $request->input('student_group');
        // dd(1000 / 100 * 2);
        $waiver_type_name = $request->input('waiver_type_name');
        $waiver_percentage = $request->input('waiver_percentage');
        $waiver_expire_date = $request->input('waiver_expire_date');
        $allStudentId = $request->input('student_id', []);
        $selectedStudentsId = $request->input('student_select', []);
        $selectedFeesId = $request->input('fees_select', []);

        foreach ($allStudentId as $studentId => $value) {
            if (isset($selectedStudentsId[$studentId])) {
                foreach ($selectedFeesId as $FeeId => $value) {
                    $checkExistance = Waiver::where("schoolCode", $school_code)
                        ->where('action', 'approved')
                        ->where('fee_id', $FeeId)
                        ->where('student_id', $studentId)
                        ->where('waiver_type_name', $waiver_type_name)
                        ->where('waiver_type_name', $waiver_type_name)
                        ->first();
                    if (!$checkExistance) {
                        $waiver = new Waiver();
                        $waiver->fee_id = $FeeId;
                        $waiver->student_id = $studentId;
                        $waiver->waiver_type_name = $waiver_type_name;
                        $waiver->waiver_percentage = intval($waiver_percentage);
                        $waiver->waiver_expire_date = $waiver_expire_date;
                        $waiver->schoolCode = $school_code;
                        $waiver->save();
                    }
                }
            }
        }

        return redirect()->back()->with('success', 'Waiver Setup Successfull');
    }
}
