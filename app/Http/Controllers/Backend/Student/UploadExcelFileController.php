<?php

namespace App\Http\Controllers\Backend\Student;

use App\Http\Controllers\Controller;
use App\Models\AddAcademicYear;
use App\Models\AddCategory;
use App\Models\AddClass;
use App\Models\AddGroup;
use App\Models\AddSection;
use App\Models\AddShift;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class UploadExcelFileController extends Controller
{
    public function uploadExelFile(){
        $school_code=100;
        $classes=AddClass::where('action','approved')->where('school_code',$school_code)->get(); 
        $groups=AddGroup::where('action','approved')->where('school_code',$school_code)->get();
        $sections=AddSection::where('action','approved')->where('school_code',$school_code)->get();
        $shifts=AddShift::where('action','approved')->where('school_code',$school_code)->get();
        $categories=AddCategory::where('action','approved')->where('school_code',$school_code)->get();
        $academicYears=AddAcademicYear::where('action','approved')->where('school_code',$school_code)->get();
        return view('Backend.Student.uploadExxelFile', compact('classes', 'groups', 'shifts', 'categories','academicYears','sections'));
    }

    public function downloadDemo()
    {
        $filePath = public_path('demo.xlsx');

        return Response::download($filePath, 'demo.xlsx', [], 'inline');
    }


    public function uploadExcel(Request $request)
    {
        dd($request);
        $request->validate([
            'file' => 'required|mimes:xlsx,xls',

        ]);

        $file = $request->file('file');

        if ($file->isValid()) {
            $students = $this->readExcel($file);
            
            // Save students to database
            foreach ($students as $student) {
                // Create a new student object
                $newStudent = new Student();

                // Fill only the fields present in the Excel sheet
                foreach ($student as $key => $value) {
                    if ($key !== 'password') { // Skip password field
                        $newStudent->$key = $value;
                    }
                }

                // Save the student
                $newStudent->save();
            }

            return redirect()->back()->with('success', 'Student information uploaded successfully.');
        } else {
            return redirect()->back()->with('error', 'Invalid file uploaded.');
        }
        
    }

}
