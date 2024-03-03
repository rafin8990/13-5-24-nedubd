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
    public function set_short_code(Request $request)
    {
        $school_code = '100';
        $searchClassData = null;
        $searchClassExamName = null;
        $searchAcademicYearName = null;
        $setCodeData = null;
        $shortCodeData = null;

        if ($request->input('class_name')) {
            $searchClassData = $request->input('class_name');
            $searchClassExamName = $request->input('class_exam_name');
            $searchAcademicYearName = $request->input('academic_year_name');

            $setCode = SetShortCode::where('action', 'approved')
                ->where('school_code', $school_code)
                ->where('class_name', $searchClassData)
                ->where('class_exam_name', $searchClassExamName)
                ->where('academic_year_name', $searchAcademicYearName)
                ->get();

            foreach ($setCode as $codeData) {
                $setCodeData = $codeData; // Assign the current set code data to the $setCodeData variable
            }
            $shortCodeData = AddShortCode::where('action', 'approved')->where('school_code', $school_code)->get();
        }

        $classData = AddClass::where('action', 'approved')->where('school_code', $school_code)->get();
        $classExamData = AddClassExam::where('action', 'approved')->where('school_code', $school_code)->get();
        $academicYearData = AddAcademicYear::where('action', 'approved')->where('school_code', $school_code)->get();


        return view('Backend/BasicInfo/ExamSetting/getShortCode', compact('setCodeData', 'classData', 'classExamData', 'academicYearData', 'shortCodeData', 'searchClassData', 'searchClassExamName', 'searchAcademicYearName'));
    }



    public function store_set_short_code(Request $request)
    {
        // dd($request);
        // Validate the incoming request data
        $validatedData = $request->validate([
            'class_name' => 'required|string|max:255',
            'class_exam_name' => 'required|string|max:255',
            'academic_year_name' => 'required|string|max:255',
            'short_code' => 'required|array',
            // 'status' => 'required|string|in:active,in active',
        ]);
        // dd($validatedData);

        // Set the school code
        $school_code = '100'; // Your school code here

        $existingData = SetShortCode::where('action', 'approved')
            ->where('school_code', $school_code)
            ->where('class_name', $request->class_name)
            ->where('class_exam_name', $request->class_exam_name)
            ->where('academic_year_name', $request->academic_year_name)
            ->get();
            
        if ($existingData->isNotEmpty()) {
            // Update existing data
            $existingSetShortCode = $existingData->first(); // Assuming you only have one existing data, you can adjust if needed

            // Update the short code
            $existingSetShortCode->short_code = $request->short_code;

            // Save the changes
            $existingSetShortCode->save();
        } else {
            $setShortCode = new SetShortCode();
            $setShortCode->class_name = $request->class_name;
            $setShortCode->class_exam_name = $request->class_exam_name;
            $setShortCode->academic_year_name = $request->academic_year_name;
            $setShortCode->short_code = $request->short_code;
            $setShortCode->status = 'active';
            $setShortCode->action = 'approved';
            $setShortCode->school_code = $school_code;
            $setShortCode->save();
        }

        // Redirect back with a success message
        return redirect()->back()->with('success', 'group added successfully!');
    }
}
