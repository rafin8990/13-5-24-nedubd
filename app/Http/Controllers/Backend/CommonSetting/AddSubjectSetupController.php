<?php

namespace App\Http\Controllers\Backend\CommonSetting;

use App\Http\Controllers\Controller;
use App\Models\AddClass;
use App\Models\AddGroup;
use App\Models\AddSubject;
use App\Models\SubjectSetup;
use Illuminate\Http\Request;

class AddSubjectSetupController extends Controller
{
    public function add_subject_setup()
    {

        $school_code = '100';

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
            'subject_name' => 'required|string'
        ]);

        $school_code = '100';

        // Save class name to database
        $subjectSetup = new SubjectSetup();
        $subjectSetup->class_name = $request->class_name;
        $subjectSetup->group_name = $request->group_name;
        $subjectSetup->subject_name = $request->subject_name;
        $subjectSetup->status = 'active';
        $subjectSetup->action = 'approved';
        $subjectSetup->school_code = $school_code;
        // dd($subjectSetup);
        $subjectSetup->save();

        return redirect()->back()->with('success', 'subject setup added successfully!');
    }

    public function delete_add_subject_setup($id)
    {
        $subjectSetup = SubjectSetup::findOrFail($id);
        $subjectSetup->delete();
        return redirect()->back()->with('success', 'subject setup  deleted successfully!');
    }
}
