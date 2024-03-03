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
    public function fourthSubject()
    {
        $classes = AddClass::all();
        $groups = AddGroup::all();
        $sections = AddSection::all();
        $years = AddAcademicYear::all();


        return view('Backend.BasicInfo.ExamSetting.setForthSubject', compact('classes', 'groups', 'sections', 'years'));
    }

    public function addFourthSubject(Request $request)
    {
        $class = $request->class_name;
        $group = $request->group_name;
        $section = $request->section_name;
        $year = $request->year;
        $students = Student::where('class_name', $class)->where('section', $section)->where('group', $group)->where('year', $year)->get();

        return view('Backend.BasicInfo.ExamSetting.setForthSubject', compact('students'));

    }

    public function getGroupsByClass(Request $request)
    {
        $className = $request->input('class_name');
        $groups = AddClassWiseGroup::where('class_name', $className)->get();
        return response()->json($groups);
    }
}
