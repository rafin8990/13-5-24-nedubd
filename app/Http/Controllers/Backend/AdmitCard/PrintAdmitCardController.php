<?php

namespace App\Http\Controllers\Backend\AdmitCard;

use App\Http\Controllers\Controller;
use App\Models\AddAcademicYear;
use App\Models\AddClassExam;
use App\Models\AddSignature;
use App\Models\AdmitInstruction;
use App\Models\ExamPublish;
use App\Models\Student;
use App\Models\AddClass;
use App\Models\AddSection;
use App\Models\AddGroup;
use Illuminate\Http\Request;

class PrintAdmitCardController extends Controller
{
    public function printAdmitCard($schoolCode)
    {

        $classes = AddClass::where("action", "approved")->where("school_code", $schoolCode)->get();
        $sections = AddSection::where("action", "approved")->where("school_code", $schoolCode)->get();
        $groups = AddGroup::where("action", "approved")->where("school_code", $schoolCode)->get();
        $studentId = Student::where("action", "approved")->where("school_code", $schoolCode)->get();
        $examName = AddClassExam::where("action", "approved")->where("school_code", $schoolCode)->get();
        $year = AddAcademicYear::where("action", "approved")->where("school_code", $schoolCode)->get();

        return view('Backend/AdmitCard/Report(admitCards)/printAdmitCard', compact('classes', 'sections', 'groups', 'studentId', 'examName', 'year'));
    }

    public function downloadAdmit(Request $request, $schoolCode)
    {

        $class = $request->class;
        $group = $request->group;
        $section_name = $request->section_name;
        $id = $request->id;
        $exam_name = $request->exam_name;
        $year = $request->year;
        $print_type = $request->print_type;

        if ($class === null) {
            return redirect()->route('printAdmitCard', $schoolCode)->with([
                'error' => 'Please select class name!',
                'group' => $request->group,
                'section_name' => $request->section_name,
                'id' => $request->id,
                'exam_name' => $request->exam_name,
                'year' => $request->year,
                'print_type' => $request->print_type,
            ]);
        } elseif ($group === null) {
            return redirect()->route('printAdmitCard', $schoolCode)->with([
                'error' => 'Please select class name!',
                'class' => $request->class,
                'section_name' => $request->section_name,
                'id' => $request->id,
                'exam_name' => $request->exam_name,
                'year' => $request->year,
                'print_type' => $request->print_type,
            ]);
        } elseif ($section_name === null) {
            return redirect()->route('printAdmitCard', $schoolCode)->with([
                'error' => 'Please select class name!',
                'group' => $request->group,
                'class' => $request->class,
                'id' => $request->id,
                'exam_name' => $request->exam_name,
                'year' => $request->year,
                'print_type' => $request->print_type,
            ]);
        } elseif ($id === null) {
            return redirect()->route('printAdmitCard', $schoolCode)->with([
                'error' => 'Please select class name!',
                'group' => $request->group,
                'section_name' => $request->section_name,
                'class' => $request->class,
                'exam_name' => $request->exam_name,
                'year' => $request->year,
                'print_type' => $request->print_type,
            ]);
        } elseif ($exam_name === null) {
            return redirect()->route('printAdmitCard', $schoolCode)->with([
                'error' => 'Please select class name!',
                'group' => $request->group,
                'section_name' => $request->section_name,
                'id' => $request->id,
                'class' => $request->class,
                'year' => $request->year,
                'print_type' => $request->print_type,
            ]);
        } elseif ($year === null) {
            return redirect()->route('printAdmitCard', $schoolCode)->with([
                'error' => 'Please select class name!',
                'group' => $request->group,
                'section_name' => $request->section_name,
                'id' => $request->id,
                'exam_name' => $request->exam_name,
                'class' => $request->class,
                'print_type' => $request->print_type,
            ]);
        } elseif ($print_type === null) {
            return redirect()->route('printAdmitCard', $schoolCode)->with([
                'error' => 'Please select class name!',
                'group' => $request->group,
                'section_name' => $request->section_name,
                'id' => $request->id,
                'exam_name' => $request->exam_name,
                'year' => $request->year,
                'class' => $request->class,
            ]);
        }

        $Data = Student::where('school_code', $schoolCode)
            ->where('class_name', $class)
            ->where('group', $group)
            ->where('student_id', $id)
            ->where('section', $section_name)->exists();
        $sign='Headmaster';
        $admit=AdmitInstruction::where('school_code', $schoolCode)->get();
        $headteacher=AddSignature::where('school_code', $schoolCode)
                                  ->where('sign',$sign)
                                  ->get();
        //dd($headteacher);   
        if ($Data) {
            $Data = Student::where('school_code', $schoolCode)
            ->where('class_name', $class)
            ->where('group', $group)
            ->where('student_id', $id)
            ->where('section', $section_name)->get();
           //dd($Data);
            return view('Backend/AdmitCard/Report(admitCards)/downloadAdmitCard', compact('Data', 'exam_name', 'year', 'admit','headteacher'));
        }

        return redirect()->back()->with('error', 'not found student data.');



    }


}
