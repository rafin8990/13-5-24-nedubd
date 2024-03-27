<?php

namespace App\Http\Controllers\Backend\Student;

use App\Http\Controllers\Controller;
use App\Models\AddAcademicSession;
use App\Models\AddAcademicYear;
use App\Models\AddCategory;
use App\Models\AddClass;
use App\Models\AddGroup;
use App\Models\AddSection;
use App\Models\AddShift;
use App\Models\Student;
use Illuminate\Http\Request;

class UpdateStudentController extends Controller
{
   public function student_update($id,$schoolCode){

    $student = Student::findOrFail($id);
    $classes=AddClass::where("action", "approved")->where("school_code",$schoolCode)->get();
    $sections=AddSection::where("action", "approved")->where("school_code",$schoolCode)->get();
    $groups=AddGroup::where("action", "approved")->where("school_code",$schoolCode)->get();
    $shifts=AddShift::where("action", "approved")->where("school_code",$schoolCode)->get();
    $sessions=AddAcademicSession::where("action", "approved")->where("school_code",$schoolCode)->get();
    $years=AddAcademicYear::where("action", "approved")->where("school_code",$schoolCode)->get();
    $categories=AddCategory::where("action", "approved")->where("school_code",$schoolCode)->get();

       return view ('Backend.Student.updateStudent',compact('student','classes','sections','groups','shifts','sessions','years','categories'));
   }
}
