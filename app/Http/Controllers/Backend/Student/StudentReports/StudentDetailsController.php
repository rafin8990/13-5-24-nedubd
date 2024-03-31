<?php

namespace App\Http\Controllers\Backend\Student\StudentReports;

use App\Http\Controllers\Controller;
use App\Models\AddAcademicYear;
use App\Models\AddClass;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentDetailsController extends Controller
{
    public function StudentDetails($schoolCode){
        $classes = AddClass::where("action", "approved")->where("school_code", $schoolCode)->get();
        $studentId = Student::where("action", "approved")->where("school_code", $schoolCode)->get();
        $year = AddAcademicYear::where("action", "approved")->where("school_code", $schoolCode)->get();
        
        return view('Backend.Student.students(report).studentDetails',compact('classes','studentId','year'));
    }
    public function getStudentID(Request $request, $schoolCode,$classValue)
    {
    
        // Fetch students based on the selected class, group, and section
        $students = Student::where('class_name', $classValue)
            ->where('school_code', $schoolCode)
            ->pluck('student_id', 'student_id');
    
        // You may return the students as JSON response or in any suitable format
        return response()->json($students);
    }
    public function StudentDetailsPrint(Request $request ,$schoolCode){
        $classValue=$request->Class_name;
        $id=$request->id;
        $students = Student::where('Class_name', $classValue)
        ->where('school_code', $schoolCode)
        ->where('student_id', $id)->get();

        return view('Backend.Student.students(report).studentDetailsPrint',compact('students'));
    }
}
