<?php

namespace App\Http\Controllers\Backend\ExamResult;

use App\Http\Controllers\Controller;
use App\Models\AddAcademicYear;
use App\Models\AddClass;
use App\Models\AddClassExam;
use App\Models\AddGroup;
use App\Models\AddSection;
use App\Models\AddShift;
use App\Models\AddSubject;
use App\Models\ExamPublish;
use App\Models\SetShortCode;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class MarkInputController extends Controller
{

    public function exam_marks($school_code)
    {
        $classData = AddClass::where('action', 'approved')->where('school_code', $school_code)->get();
        $groupData = AddGroup::where('action', 'approved')->where('school_code', $school_code)->get();
        $sectionData = AddSection::where('action', 'approved')->where('school_code', $school_code)->get();
        $shiftData = AddShift::where('action', 'approved')->where('school_code', $school_code)->get();
        $subjectData = AddSubject::where('action', 'approved')->where('school_code', $school_code)->get();
        $classExamData = AddClassExam::where('action', 'approved')->where('school_code', $school_code)->get();
        $academicYearData = AddAcademicYear::where('action', 'approved')->where('school_code', $school_code)->get();
        return view('/Backend/ExamResult/exam_marks', compact('classData', 'groupData', 'sectionData', 'shiftData', 'subjectData', 'classExamData', 'academicYearData'));
    }
   


    
    public function generateExcelSheet(Request $request, $school_code) {
        // dd($request);
$class=$request->input('class');
$group=$request->input('group');
$section=$request->input('section');
$shift=$request->input('shift');
$subject=$request->input('subject');
$exam=$request->input('exam');
$year=$request->input('year');
// dd($class);

        $classData = AddClass::where('action', 'approved')->where('school_code', $school_code)->get();
        $groupData = AddGroup::where('action', 'approved')->where('school_code', $school_code)->get();
        $sectionData = AddSection::where('action', 'approved')->where('school_code', $school_code)->get();
        $shiftData = AddShift::where('action', 'approved')->where('school_code', $school_code)->get();
        $subjectData = AddSubject::where('action', 'approved')->where('school_code', $school_code)->get();
        $classExamData = AddClassExam::where('action', 'approved')->where('school_code', $school_code)->get();
        $academicYearData = AddAcademicYear::where('action', 'approved')->where('school_code', $school_code)->get();

        $existingExam= ExamPublish::where('school_code',$school_code)->where('action','approved')->where('Class_name',$class)->where('exam_name',$exam)->where('year',$year)->where('status','active')->first();

        if($existingExam){
            return redirect()->back()->with('error','Exam already published');
        }

        $shortCodes=SetShortCode::where('school_code',$school_code)->where('action','approved')->where('class_exam_name',$exam)->where('academic_year_name',$year)->where('class_name',$class)->get();

return view('/Backend/ExamResult/exam_marks', compact('classData', 'groupData', 'sectionData', 'shiftData', 'subjectData', 'classExamData', 'academicYearData'));
    }
}
