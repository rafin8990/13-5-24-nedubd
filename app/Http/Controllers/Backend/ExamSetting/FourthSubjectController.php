<?php

namespace App\Http\Controllers\Backend\ExamSetting;

use App\Http\Controllers\Controller;
use App\Models\AddAcademicYear;
use App\Models\AddClass;
use App\Models\AddClassWiseGroup;
use App\Models\AddGroup;
use App\Models\AddSection;
use App\Models\Student;
use Illuminate\Http\Request;

class FourthSubjectController extends Controller
{
    public function fourthSubject(Request $request)
    {
        $school_code = '100';
        $class = null;
        $section = null;
        $group = null;
        $year = null;
    
        $classes = AddClass::where('school_code', $school_code)->get();
        $groups = AddGroup::where('school_code', $school_code)->get();
        $sections = AddSection::where('school_code', $school_code)->get();
        $years = AddAcademicYear::where('school_code', $school_code)->get();
    
        $students = []; // Initialize $students
    
        if ($request->session()->get('class_name')) {
            
            $class = $request->session()->get('class_name');
            $section = $request->session()->get('section_name');
            $group = $request->session()->get('group_name');
            $year = $request->session()->get('year');
    
            $students = Student::where('action', 'approved')
            ->where('school_code', $school_code)
                ->where('class_name', $class)
                ->where('section', $section)
                ->where('group', $group)
                ->where('year', $year)
                ->get();
        } 
           
        return view('Backend/BasicInfo/ExamSetting/setForthSubject', compact('classes', 'groups', 'sections', 'years', 'students'));
        
    }


    public function addFourthSubject(Request $request)
    {
        return redirect()->route('set.Forth.Subject')->with([
            'class_name' => $request->class_name,
            'group_name' => $request->group_name,
            'section_name' => $request->section_name,
            'year' => $request->year
        ]);

    }


}
