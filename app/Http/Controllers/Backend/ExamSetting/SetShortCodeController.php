<?php

namespace App\Http\Controllers\Backend\ExamSetting;

use App\Http\Controllers\Controller;
use App\Models\AddAcademicYear;
use App\Models\AddClass;
use App\Models\AddClassExam;
use App\Models\AddShortCode;
use App\Models\SetShortCode;
use Illuminate\Http\Request;

class SetShortCodeController extends Controller
{
    public function set_short_code()
    {
        $school_code = '100';

        $setCodeData = SetShortCode::where('action', 'approved')->where('school_code', $school_code)->get();
        $classData = AddClass::where('action', 'approved')->where('school_code', $school_code)->get();
        $classExamData = AddClassExam::where('action', 'approved')->where('school_code', $school_code)->get();
        $academicYearData = AddAcademicYear::where('action', 'approved')->where('school_code', $school_code)->get();
        $shortCodeData = AddShortCode::where('action', 'approved')->where('school_code', $school_code)->get();

        return view('Backend/BasicInfo/ExamSetting/getShortCode', compact('setCodeData', 'classData', 'classExamData', 'academicYearData', 'shortCodeData'));
    }


    public function update_set_short_code(Request $request)
    {

        // dd($request);
        // Validate the incoming request data
        $validatedData = $request->validate([
            'class_name' => 'required|string|max:255',
            'exam_name' => 'required|string|max:255',
            'exam_year' => 'required|string|max:255',
            'short_code' => 'required|string|max:255',
            'status' => 'required|string|in:active,in active',
        ]);
        // dd($validatedData);

        // Set the school code
        $school_code = '100'; // Your school code here


        // If no duplicate record is found, proceed to create a new record
        $gradePoint = new SetShortCode();
        $gradePoint->class_name = $request->class_name;
        $gradePoint->exam_name = $request->exam_name;
        $gradePoint->exam_year = $request->exam_year;
        $gradePoint->short_code = $request->short_code;
        $gradePoint->status = $request->status;
        $gradePoint->action = 'approved';
        $gradePoint->school_code = $school_code;

        // dd($gradePoint);

        // Save the new record
        $gradePoint->save();


        // Redirect back with a success message
        return redirect()->back()->with('success', 'group added successfully!');
    }

    public function delete_set_short_code($id)
    {
        $gradePoint = SetShortCode::findOrFail($id);
        $gradePoint->delete();
        return redirect()->back()->with('success', 'group deleted successfully!');
    }
}
