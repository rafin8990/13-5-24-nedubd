<?php

namespace App\Http\Controllers\Backend\ExamSetting;

use App\Http\Controllers\Controller;
use App\Models\AddAcademicYear;
use App\Models\AddClass;
use App\Models\AddClassExam;
use Illuminate\Http\Request;

class SequentialWiseExamController extends Controller
{
    public function SequentialExam(){
        $school_code=100;
        $classes= AddClass::where('action','approved')->where('school_code', $school_code)->get();
        $exams=AddClassExam::where('action','approved')->where('school_code', $school_code)->get();
        $academicYears=AddAcademicYear::where('action','approved')->where('school_code', $school_code)->get();
        return view ('Backend/BasicInfo/ExamSetting/sequentialExam', compact('classes'));
    }
}
