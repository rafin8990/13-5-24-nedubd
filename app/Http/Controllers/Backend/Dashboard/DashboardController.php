<?php

namespace App\Http\Controllers\Backend\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\AddClass;
use App\Models\AddSection;
use App\Models\AddGroup;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index($schoolCode){
        $studentData=Student::where('school_code', $schoolCode)->get(); 
        $classData=AddClass::where('school_code', $schoolCode)->get(); 
        $sectionData=AddSection::where('school_code', $schoolCode)->get(); 
        $groupData=AddGroup::where('school_code', $schoolCode)->get();
       // dd($studentData) ;
        return view("Backend.Dashboard.Dashboard",compact('studentData','classData','sectionData','groupData'));
    }
}
