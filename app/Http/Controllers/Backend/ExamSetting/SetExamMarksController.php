<?php

namespace App\Http\Controllers\Backend\ExamSetting;

use App\Http\Controllers\Controller;
use App\Models\AddAcademicYear;
use App\Models\AddClass;
use App\Models\AddClassExam;
use Illuminate\Http\Request;

class SetExamMarksController extends Controller
{
    public function set_exam_marks(Request $request)
    {
        $school_code = '100';
        $searchClassData = null;
        $searchClassExamName = null;
        $searchAcademicYearName = null;
        $setCodeData = null;
        $shortCodeData = null;

        $classData = AddClass::where('action', 'approved')->where('school_code', $school_code)->get();
        $classExamData = AddClassExam::where('action', 'approved')->where('school_code', $school_code)->get();
        $academicYearData = AddAcademicYear::where('action', 'approved')->where('school_code', $school_code)->get();


        return view('Backend/BasicInfo/ExamSetting/classSetExamMarks', compact('classData', 'classExamData', 'academicYearData', 'searchClassData', 'searchClassExamName', 'searchAcademicYearName'));
    }

    public function store_exam_marks(Request $request)
    {
        dd($request);
       
    }
}
