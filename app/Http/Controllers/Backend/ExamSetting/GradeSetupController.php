<?php

namespace App\Http\Controllers\Backend\ExamSetting;

use App\Http\Controllers\Controller;
use App\Models\AddAcademicYear;
use App\Models\AddClass;
use App\Models\AddClassExam;
use App\Models\AddGradePoint;
use Illuminate\Http\Request;

class GradeSetupController extends Controller
{
    public function grade_setup()
    {

        $school_code = '100';

        $gradePointData = AddGradePoint::where('action', 'approved')->where('school_code', $school_code)->get();

        $classData = AddClass::where('action', 'approved')->where('school_code', $school_code)->get();
        $academicYearData = AddAcademicYear::where('action', 'approved')->where('school_code', $school_code)->get();
        $classExamData = AddClassExam::where('action', 'approved')->where('school_code', $school_code)->get();

        return view('Backend/BasicInfo/ExamSetting/gradeSetup', compact('gradePointData', 'classData', 'academicYearData', 'classExamData'));
    }

   
}
