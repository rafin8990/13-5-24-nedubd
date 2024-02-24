<?php

namespace App\Http\Controllers\Backend\CommonSetting;

use App\Http\Controllers\Controller;
use App\Models\AddClass;
use App\Models\AddClassWiseGroup;
use App\Models\AddGroup;
use Illuminate\Http\Request;

class AddClassWiseGroupController extends Controller
{
    public function add_class_wise_group()
    {

        $school_code = '100';

        $classWiseGroupData = AddClassWiseGroup::where('action', 'approved')->where('school_code', $school_code)->get();
        $classData = AddClass::where('action', 'approved')->where('school_code', $school_code)->get();
        $groupData = AddGroup::where('action', 'approved')->where('school_code', $school_code)->get();

        return view('Backend/BasicInfo/CommonSetting/addClassWiseGroup', compact('classData', 'groupData', 'classWiseGroupData'));
    }

    public function update_add_class_wise_group(Request $request)
    {
        // dd($request);
        // Validate form data
        $request->validate([
            'class_name' => 'required|string',
            'group_name' => 'required|string'
        ]);
        

        $school_code = '100';

        // Save class name to database
        $classWiseGroup = new AddClassWiseGroup();
        $classWiseGroup->class_name = $request->class_name;
        $classWiseGroup->group_name = $request->group_name;
        $classWiseGroup->status = 'active';
        $classWiseGroup->action = 'approved';
        $classWiseGroup->school_code = $school_code;
        // dd($classWiseGroup);
        $classWiseGroup->save();

        return redirect()->back()->with('success', 'class wise group added successfully!');
    }

    public function delete_add_class_wise_group($id)
    {
        $class = AddClassWiseGroup::findOrFail($id);
        $class->delete();
        return redirect()->back()->with('success', 'Class wise group deleted successfully!');
    }
}
