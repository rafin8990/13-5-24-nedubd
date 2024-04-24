<?php

namespace App\Http\Controllers\Backend\FeesSetting;

use App\Http\Controllers\Controller;
use App\Models\AddClass;
use App\Models\AddGroup;
use App\Models\AddSection;
use App\Models\AddWaiverType;
use App\Models\Student;
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
        $sessionClass = $request->session()->get('class');
        $sessionGroup = $request->session()->get('group');
        $sessionSection = $request->session()->get('section');
        $sessionWaiver_type = $request->session()->get('waiver_type');
        $sessionPercentage = $request->session()->get('percentage');

        return view(
            'Backend.BasicInfo.FeesSetting.WaiverSetup',
            compact(
                'classes',
                'groups',
                'sections',
                'school_code',
                'waiverTypes',
                'sessionStudents',
                'sessionClass',
                'sessionGroup',
                'sessionSection',
                'sessionWaiver_type',
                'sessionPercentage',
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

        return redirect()->route('waiverSetup.view', $school_code)->with([
            'students' => $students,
            'class' => $class,
            'group' => $group,
            'section' => $section,
            'waiver_type' => $waiver_type,
            'percentage' => $percentage,
        ]);
    }


    public function WaiverStudentListSetup(Request $request, $school_code)
    {
        dd($request->all());
    }
}
