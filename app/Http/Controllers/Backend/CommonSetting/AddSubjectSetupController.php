<?php

namespace App\Http\Controllers\Backend\CommonSetting;

use App\Http\Controllers\Controller;
use App\Models\AddClass;
use App\Models\AddClassWiseSection;
use App\Models\AddClassWiseSubject;
use App\Models\AddGroup;
use App\Models\AddSubject;
use App\Models\SubjectSetup;
use Illuminate\Http\Request;

class AddSubjectSetupController extends Controller
{
    public function add_subject_setup(Request $request)
    {
        
        $school_code = '100';
        if ($request) {
           dd($request);
        }

        $classWiseShiftData = SubjectSetup::where('action', 'approved')->where('school_code', $school_code)->get();
        $classData = AddClass::where('action', 'approved')->where('school_code', $school_code)->get();
        $groupData = AddGroup::where('action', 'approved')->where('school_code', $school_code)->get();
        $subjectData = AddSubject::where('action', 'approved')->where('school_code', $school_code)->get();

        return view('Backend/BasicInfo/CommonSetting/addSubjectSetup', compact('classWiseShiftData', 'classData', 'groupData', 'subjectData'));
    }

    public function update_add_subject_setup(Request $request)
    {
        // dd($request);
        // Validate form data
        $request->validate([
            'class_name' => 'required|string',
            'group_name' => 'required|string',
            'subject_name' => 'required|array',

        ]);

        $school_code = '100';

        $existingData = AddClassWiseSubject::where('action', 'approved')
            ->where('school_code', $school_code)
            ->where('class_name', $request->class_name)
            ->where('group_name', $request->group_name)
            ->get();

        $generateId = AddClassWiseSubject::count() + 1;
        $generatedId = sprintf('%02d', $generateId);

        // dd($existingData);

        if ($existingData->isNotEmpty()) {
            // Update existing data
            $existingSetShortCode = $existingData->first(); // Assuming you only have one existing data, you can adjust if needed

            // Update the short code
            $existingSetShortCode->subject_name = $request->subject_name;

            // dd($existingSetShortCode);

            // Save the changes
            $existingSetShortCode->save();
        } else {
            $addClassSubject = new AddClassWiseSubject();
            $addClassSubject->class_name = $request->class_name;
            $addClassSubject->subject_name = $request->subject_name;
            $addClassSubject->group_name = $request->group_name;

            $addClassSubject->subject_serial = $generatedId;

            $addClassSubject->status = 'active';
            $addClassSubject->action = 'approved';
            $addClassSubject->school_code = $school_code;

            // dd($addClassSubject);

            $addClassSubject->save();
        }

        // Redirect back with a success message
        return redirect()->back()->with('success', 'group added successfully!');

        return redirect()->back()->with('success', 'subject setup added successfully!');
    }

    public function delete_add_subject_setup($id)
    {
        $subjectSetup = SubjectSetup::findOrFail($id);
        $subjectSetup->delete();
        return redirect()->back()->with('success', 'subject setup  deleted successfully!');
    }
}
