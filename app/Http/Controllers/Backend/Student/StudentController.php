<?php

namespace App\Http\Controllers\Backend\Student;

use App\Http\Controllers\Controller;
use App\Models\AddAcademicSession;
use App\Models\AddAcademicYear;
use App\Models\AddCategory;
use App\Models\AddClass;
use App\Models\AddGroup;
use App\Models\AddSection;
use App\Models\AddShift;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    public function AddStudentForm($schoolCode)
    {
        // $school_code=100;
        $studentId= $this->generateStudentId();
        $classes=AddClass::where("action", "approved")->where("school_code",$schoolCode)->get();
        $sections=AddSection::where("action", "approved")->where("school_code",$schoolCode)->get();
        $groups=AddGroup::where("action", "approved")->where("school_code",$schoolCode)->get();
        $shifts=AddShift::where("action", "approved")->where("school_code",$schoolCode)->get();
        $sessions=AddAcademicSession::where("action", "approved")->where("school_code",$schoolCode)->get();
        $years=AddAcademicYear::where("action", "approved")->where("school_code",$schoolCode)->get();
        $categories=AddCategory::where("action", "approved")->where("school_code",$schoolCode)->get();
        return view("Backend.Student.addStudent",compact("studentId","classes","sections","groups", "shifts","sessions","years","categories"));
    }

    public function addStudent(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'birth_date' => 'required|string',
            'student_roll' => 'required|string',
            'Class_name' => 'required|string',
            'group' => 'required|string',
            'section' => 'required|string',
            'shift' => 'required|string',
            'category' => 'required|string',
            
            'year' => 'required|string',
            'gender' => 'required|string',
            'religious' => 'required|string',
            'nationality' => 'required|string',
            'blood_group' => 'required|string',
            'session' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'admission_date' => 'required|string',
            'father_name' => 'required|string',
            'father_mobile' => 'required|string',
            'father_occupation' => 'required|string',
            'father_nid' => 'required|string',
            'father_birth_date' => 'required|string',
            'mother_name' => 'required|string',
            'mother_number' => 'required|string',
            'mother_occupation' => 'required|string',
            'mother_nid' => 'required|string',
            'mother_birth_date' => 'required|string',
            'mother_income' => 'required|string',
            'present_village' => 'required|string',
            'present_post_office' => 'required|string',
            'present_country' => 'required|string',
            'present_zip_code' => 'required|string',
            'present_district' => 'required|string',
            'present_police_station' => 'required|string',
            'parmanent_village' => 'required|string',
            'parmanent_post_office' => 'required|string',
            'parmanent_country' => 'required|string',
            'parmanent_zip_code' => 'required|string',
            'parmanent_district' => 'required|string',
            'parmanent_police_station' => 'required|string',
            'guardian_name' => 'required|string',
            'guardian_address' => 'required|string',
            'last_school_name' => 'required|string',
            'last_class_name' => 'required|string',
            'last_result' => 'required|string',
            'last_passing_year' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|string|min:4',
        ]);

        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'file|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            $imagePath = $request->file('image')->move('images/student', $request->input('student_id') . '_' . uniqid() . '.' . $request->file('image')->extension());
            $studentImage = 'images/student/' . basename($imagePath);

            // dd($studentImage);

            $isExist = Student::where('student_id', $request->input('student_id'))
                ->exists();

            if ($isExist) {
                // return back()->with('error', 'Failed. This Student already exists');
                return redirect()->back()->with('error', 'This Student already exists.');
            }


            $student = new Student();
            $student->first_name = $request->input('first_name');
            $student->last_name = $request->input('last_name');
            $student->birth_date = $request->input('birth_date');
            $student->student_id = $request->input('student_id');
            $student->student_roll = $request->input('student_roll');
            $student->Class_name = $request->input('Class_name');
            $student->group = $request->input('group');
            $student->section = $request->input('section');
            $student->shift = $request->input('shift');
            $student->category = $request->input('category');
            $student->year = $request->input('year');
            $student->gender = $request->input('gender');
            $student->religious = $request->input('religious');
            $student->nationality = $request->input('nationality');
            $student->blood_group = $request->input('blood_group');
            $student->session = $request->input('session');
            $student->image = $studentImage;
            $student->admission_date = $request->input('admission_date');
            $student->father_name = $request->input('father_name');
            $student->father_mobile = $request->input('father_mobile');
            $student->father_occupation = $request->input('father_occupation');
            $student->father_nid = $request->input('father_nid');
            $student->father_birth_date = $request->input('father_birth_date');
            $student->mother_name = $request->input('mother_name');
            $student->mother_number = $request->input('mother_number');
            $student->mother_occupation = $request->input('mother_occupation');
            $student->mother_nid = $request->input('mother_nid');
            $student->mother_birth_date = $request->input('mother_birth_date');
            $student->mother_income = $request->input('mother_income');
            $student->present_village = $request->input('present_village');
            $student->present_post_office = $request->input('present_post_office');
            $student->present_country = $request->input('present_country');
            $student->present_zip_code = $request->input('present_zip_code');
            $student->present_district = $request->input('present_district');
            $student->present_police_station = $request->input('present_police_station');
            $student->parmanent_village = $request->input('parmanent_village');
            $student->parmanent_post_office = $request->input('parmanent_post_office');
            $student->parmanent_country = $request->input('parmanent_country');
            $student->parmanent_zip_code = $request->input('parmanent_zip_code');
            $student->parmanent_district = $request->input('parmanent_district');
            $student->parmanent_police_station = $request->input('parmanent_police_station');
            $student->guardian_name = $request->input('guardian_name');
            $student->guardian_address = $request->input('guardian_address');
            $student->last_school_name = $request->input('last_school_name');
            $student->last_class_name = $request->input('last_class_name');
            $student->last_result = $request->input('last_result');
            $student->last_passing_year = $request->input('last_passing_year');
            $student->email = $request->input('email');
            $student->password = Hash::make($request->input('password'));
            $student->role = 'student';
            $student->school_code = $request->input('school_code');
            $student->action = $request->input('action');
            $student->save();
            // return redirect('/dashboard/add-student/{schoolCode}')->with('success', 'Student Sucessfully  created.');
            return redirect()->back()->with('success', 'student added successfully!');
        }
    }

    private function generateStudentId()
    {
        $lastStudent = Student::latest()->first();
        if ($lastStudent) {
            $lastId = intval(substr($lastStudent->student_id, -4));
            $newId = $lastId + 1;
        } else {
            $newId = 1;
        }

        return 'STU' . date('Y') . str_pad($newId, 4, '0', STR_PAD_LEFT);
    }


    public function updateStudentBasicInfo(){
        return view('Backend.Student.updateStudentBasicInfo');
    }
    public function studentProfileUpdate(){
        return view('Backend.Student.studentProfileUpdate');
    }
    
    public function uploadStudentPhoto(){
        return view('Backend.Student.uploadPhoto');
    }
}
