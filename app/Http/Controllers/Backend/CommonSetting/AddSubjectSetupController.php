<?php

namespace App\Http\Controllers\Backend\CommonSetting;

use App\Http\Controllers\Controller;
use App\Models\AddClass;
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
        $selectedClassName = null;
        $selectedGroupName = null;

        if ($request->has('class_name')) {
            $selectedClassName = $request->input('class_name');
            $selectedGroupName = $request->input('group_name');
            // dd($selectedGroupName);
            $classWiseSubjectData = AddClassWiseSubject::where('action', 'approved')
                ->where('school_code', $school_code)
                ->where('class_name', $selectedClassName)
                ->where('group_name', $selectedGroupName)
                ->get();
        } elseif ($request->session()->get('class_name')) {
            $selectedClassName = $request->session()->get('class_name');
            $selectedGroupName = $request->session()->get('group_name');
            // dd($selectedGroupName, $selectedClassName);
            $classWiseSubjectData = AddClassWiseSubject::where('action', 'approved')
                ->where('school_code', $school_code)
                ->where('class_name', $selectedClassName)
                ->where('group_name', $selectedGroupName)
                ->get();
            // dd($classWiseSubjectData);
        } else {
            $classWiseSubjectData = null;
            // $classWiseSubjectData = AddClassWiseSubject::where('action', 'approved')->where('school_code', $school_code)->get();
        }


        $classData = AddClass::where('action', 'approved')->where('school_code', $school_code)->get();
        $groupData = AddGroup::where('action', 'approved')->where('school_code', $school_code)->get();
        $subjectData = AddSubject::where('action', 'approved')->where('school_code', $school_code)->get();

        return view('Backend/BasicInfo/CommonSetting/addSubjectSetup', compact('classWiseSubjectData', 'selectedClassName', 'selectedGroupName', 'classData', 'groupData', 'subjectData'));
    }

    public function store_add_subject_setup(Request $request)
    {
        // dd($request);
        // Validate form data
        $request->validate([
            'class_name' => 'required|string',
            'group_name' => 'required|string',
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
            if ($request->subject_name) {
                // dd($existingSetShortCode);
                // $existingSetShortCode->subject_name = $request->subject_name;
                $newData = $request->subject_name;
                $mergedSubjectNames = array_merge($existingSetShortCode->subject_name, $newData);
                $existingSetShortCode->subject_name = $mergedSubjectNames;
                // dd($existingSetShortCode);

                $existingSetShortCode->save();
            } else {
                $existingSetShortCode->save();
            }

            // dd($existingSetShortCode);

            // Save the changes

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


        // return redirect()->back()->with('success', 'subject setup added successfully!');
        return redirect()->route('add.subject.setup')->with([
            'success' => 'Subject setup added successfully!',
            'class_name' => $request->class_name,
            'group_name' => $request->group_name
        ]);
    }
    // public function new_add_subject_setup(Request $request)
    // {
    //     dd($request);
       
    // }

   
}
