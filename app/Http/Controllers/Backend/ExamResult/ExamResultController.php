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
use Illuminate\Http\Request;

class ExamResultController extends Controller
{
    public function exam_marks($school_code)
    {

        // $school_code = '100';
        
        $classData = AddClass::where('action', 'approved')->where('school_code', $school_code)->get();
        $groupData = AddGroup::where('action', 'approved')->where('school_code', $school_code)->get();
        $sectionData = AddSection::where('action', 'approved')->where('school_code', $school_code)->get();
        $shiftData = AddShift::where('action', 'approved')->where('school_code', $school_code)->get();
        $subjectData = AddSubject::where('action', 'approved')->where('school_code', $school_code)->get();
        $classExamData = AddClassExam::where('action', 'approved')->where('school_code', $school_code)->get();
        $academicYearData = AddAcademicYear::where('action', 'approved')->where('school_code', $school_code)->get();

        return view('/Backend/ExamResult/exam_marks', compact('classData', 'groupData', 'sectionData', 'shiftData', 'subjectData', 'classExamData', 'academicYearData'));
    }
    public function exam_process()
    {
        return view('/Backend/ExamResult/exam_process');
    }
    public function exam_excel()
    {
        return view('/Backend/ExamResult/exam_excel');
    }
    public function exam_marks_delete()
    {
        return view('/Backend/ExamResult/exam_marks_delete');
    }
    public function exam_sms()
    {
        return view('/Backend/ExamResult/exam_sms');
    }
}
