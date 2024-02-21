<?php

namespace App\Http\Controllers\Backend\CommonSetting;

use App\Http\Controllers\Controller;
use App\Models\AddClass;
use App\Models\AddClassWiseShift;
use App\Models\AddShift;
use Illuminate\Http\Request;

class AddClassWiseShiftController extends Controller
{
    public function add_class_wise_shift()
    {

        $school_code = '100';

        $classWiseShiftData = AddClassWiseShift::where('action', 'approved')->where('school_code', $school_code)->get();
        $classData = AddClass::where('action', 'approved')->where('school_code', $school_code)->get();
        $shiftData = AddShift::where('action', 'approved')->where('school_code', $school_code)->get();

        return view('Backend/BasicInfo/CommonSetting/addClassWiseShift', compact('classData', 'shiftData', 'classWiseShiftData'));
    }

    public function update_add_class_wise_shift(Request $request)
    {
        // dd($request);
        // Validate form data
        $request->validate([
            'class_name' => 'required|string',
            'shift_name' => 'required|string'
        ]);

        $school_code = '100';

        // Save class name to database
        $classWiseShift = new AddClassWiseshift();
        $classWiseShift->class_name = $request->class_name;
        $classWiseShift->shift_name = $request->shift_name;
        $classWiseShift->status = 'active';
        $classWiseShift->action = 'approved';
        $classWiseShift->school_code = $school_code;
        // dd($classWiseShift);
        $classWiseShift->save();

        return redirect()->back()->with('success', 'class wise shift added successfully!');
    }

    public function delete_add_class_wise_shift($id)
    {
        $class = AddClassWiseShift::findOrFail($id);
        $class->delete();
        return redirect()->back()->with('success', 'Class wise shift deleted successfully!');
    }
}
