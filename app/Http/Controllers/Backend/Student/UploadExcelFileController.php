<?php

namespace App\Http\Controllers\Backend\Student;

use App\Http\Controllers\Controller;
use App\Models\AddAcademicYear;
use App\Models\AddCategory;
use App\Models\AddClass;
use App\Models\AddGroup;
use App\Models\AddSection;
use App\Models\AddShift;
use Illuminate\Http\Request;

class UploadExcelFileController extends Controller
{
    public function uploadExelFile(){
        $school_code=100;
        $classes=AddClass::where('action','approved')->where('school_code',$school_code)->get(); 
        $groups=AddGroup::where('action','approved')->where('school_code',$school_code)->get();
        $sections=AddSection::where('action','approved')->where('school_code',$school_code)->get();
        $shifts=AddShift::where('action','approved')->where('school_code',$school_code)->get();
        $categories=AddCategory::where('action','approved')->where('school_code',$school_code)->get();
        $academicYears=AddAcademicYear::where('action','approved')->where('school_code',$school_code)->get();
        return view('Backend.Student.uploadExxelFile');
    }
}
