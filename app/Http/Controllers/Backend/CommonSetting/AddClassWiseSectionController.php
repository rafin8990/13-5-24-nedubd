<?php

namespace App\Http\Controllers\Backend\CommonSetting;

use App\Http\Controllers\Controller;
use App\Models\AddClass;
use App\Models\AddClassWiseSection;
use App\Models\AddSection;
use Illuminate\Http\Request;

class AddClassWiseSectionController extends Controller
{
    public function add_class_wise_section()
    {

        $school_code = '100';


        $classWiseSectionData = AddClassWiseSection::where('action', 'approved')->where('school_code', $school_code)->get();

        $classData = AddClass::where('action', 'approved')->where('school_code', $school_code)->get();
        $sectionData = AddSection::where('action', 'approved')->where('school_code', $school_code)->get();

        return view('Backend/BasicInfo/CommonSetting/addClassWiseSection', compact('classData', 'sectionData', 'classWiseSectionData'));
    }


    public function update_add_class_wise_section(Request $request)
    {
        // dd($request);
        // Validate form data
        $request->validate([
            'class_name' => 'required|string',
            'section_name' => 'required|string'
        ]);

        $school_code = '100';


        // Check if the combination of class name and group name already exists for this school
        $existingRecord = AddClassWiseSection::where('school_code', $school_code)
            ->where('class_name', $request->class_name)
            ->where('section_name', $request->section_name)
            ->exists();

        // If a record with the same combination already exists, return with an error message
        if ($existingRecord) {
            return redirect()->back()->with('error', 'A record with the same class name and group name already exists for this school.');
        }

        // Save class name to database
        $classWiseSection = new AddClassWiseSection();
        $classWiseSection->class_name = $request->class_name;
        $classWiseSection->section_name = $request->section_name;
        $classWiseSection->status = 'active';
        $classWiseSection->action = 'approved';
        $classWiseSection->school_code = $school_code;
        // dd($classWiseSection);
        $classWiseSection->save();

        return redirect()->back()->with('success', 'class wise section added successfully!');
    }

    public function delete_add_class_wise_section($id)
    {
        $class = AddClassWiseSection::findOrFail($id);
        $class->delete();
        return redirect()->back()->with('success', 'Class wise section deleted successfully!');
    }
}
