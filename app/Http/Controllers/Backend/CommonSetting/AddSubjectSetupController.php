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
        $classWiseSubjectData = null;

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

        // dd($classWiseSubjectData);
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
        $generateId = AddClassWiseSubject::count() + 1;
        $generatedId = sprintf('%02d', $generateId);

        $subjectNames = $request->subject_name;



        if ($subjectNames === null) {
            return redirect()->route('add.subject.setup')->with([
                'error' => 'Please select subject name!',
                'class_name' => $request->class_name,
                'group_name' => $request->group_name
            ]);
        }
        // dd($subjectNames);
        $existingData = AddClassWiseSubject::where('action', 'approved')
            ->where('school_code', $school_code)
            ->where('class_name', $request->class_name)
            ->where('group_name', $request->group_name)
            ->where('subject_name', $request->subject_name)
            ->get();

        if ($existingData->isNotEmpty()) {
            return redirect()->route('add.subject.setup')->with([
                'error' => 'All Ready Added',
                'class_name' => $request->class_name,
                'group_name' => $request->group_name
            ]);
        }


        // dd($existingData);
        if (is_array($subjectNames)) {

            foreach ($subjectNames as $subject) {
                $addClassSubject = new AddClassWiseSubject();
                $addClassSubject->class_name = $request->class_name;
                $addClassSubject->subject_name = $subject;
                $addClassSubject->subject_type = 'select';
                $addClassSubject->group_name = $request->group_name;
                $addClassSubject->subject_serial = $generatedId;
                $addClassSubject->status = 'active';
                $addClassSubject->action = 'approved';
                $addClassSubject->school_code = $school_code;

                $addClassSubject->save();
            }
        } else {
            // Handle the case when only a single subject is received
            $addClassSubject = new AddClassWiseSubject();
            $addClassSubject->class_name = $request->class_name;
            $addClassSubject->subject_name = $subjectNames;
            $addClassSubject->subject_type = 'select';
            $addClassSubject->group_name = $request->group_name;
            $addClassSubject->subject_serial = $generatedId;
            $addClassSubject->status = 'active';
            $addClassSubject->action = 'approved';
            $addClassSubject->school_code = $school_code;

            $addClassSubject->save();
        }

        return redirect()->route('add.subject.setup')->with([
            'success' => 'Subject setup added successfully!',
            'class_name' => $request->class_name,
            'group_name' => $request->group_name
        ]);
    }
}
