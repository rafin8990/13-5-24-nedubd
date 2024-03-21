<?php

namespace App\Http\Controllers\Backend\ExamSetting;

use App\Http\Controllers\Controller;

use App\Models\AddAcademicYear;
use App\Models\AddClass;
use App\Models\AddClassExam;
use App\Models\AddClassWiseSubject;
use Illuminate\Http\Request;

class SetExamMarksController extends Controller
{

    public function classSetExamMarks(){
        return view ('Backend/BasicInfo/ExamSetting/classSetExamMarks');
        
    }
    public function set_exam_marks(Request $request, $schoolCode)
    {
        //$school_code = '100';
        $searchClassData = null;
        $searchClassExamName = null;
        $searchAcademicYearName = null;
        $setCodeData = null;
        $shortCodeData = null;

        $classData = AddClass::where('action', 'approved')->where('school_code', $schoolCode)->get();
        $classExamData = AddClassExam::where('action', 'approved')->where('school_code', $schoolCode)->get();
        $academicYearData = AddAcademicYear::where('action', 'approved')->where('school_code', $schoolCode)->get();


        
        $className = $request->session()->get('class_name');
        $classExamName = $request->session()->get('class_exam_name');
        $academic_year_name = $request->session()->get('academic_year_name');
        $searchClassses=AddClassWiseSubject::where("school_code",$schoolCode)->where("action","approved")->where('class_name',$className)->get();

        // dd($searchClassses);


        return view('Backend/BasicInfo/ExamSetting/classSetExamMarks', compact('classData', 'classExamData', 'academicYearData', 'searchClassData', 'searchClassExamName', 'searchAcademicYearName','searchClassses'));
    }

    public function store_exam_marks(Request $request)
    {
        return redirect()->route('set.exam.marks',$request->input('school_code'))->with([
            'class_name' => $request->input('class_name'),
            "class_exam_name"=>$request->input('class_exam_name'),
            'academic_year_name' => $request->input('academic_year_name'),
            'school_code'=>$request->input('school_code')
        ]);

    }
}
