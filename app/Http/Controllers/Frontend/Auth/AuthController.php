<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\SchoolAdmin;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index()
    {
        return view("Auth.login");
    }

    public function loginUser(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|string',
            'password' => 'required|string|min:4',
        ]);


        $admin = Admin::where('email', $request->name)->orWhere('phone_number', $request->name)->first();

        $student = Student::where('student_id', $request->name)->orWhere('email', $request->name)->orWhere('father_mobile', $request->name)->first();
        $teacher = Teacher::where('teacher_id', $request->name)->orWhere('mobile', $request->name)->first();

        if ($admin) {
            if (Hash::check($request->password, $admin->password)) {
                Session::put('AdminId', $admin->id);

                return redirect('/dashboard')->with('success', 'Login successful!');
            } else {
                return back()->with('error', 'Login failed. Please check your Id or password.');
            }
        }
        else if($student){
            if (Hash::check($request->password, $student->password)) {
                Session::put('studentId', $student->id);
                Session::put('school_code', $student->school_code);

                return redirect('/dashboard')->with('success', 'Login successful!');
            } else {
                return back()->with('error', 'Login failed. Please check your Id or password.');
            }
        }
        else if($teacher){
            if (Hash::check($request->password, $teacher->password)) {
                Session::put('teacherID', $teacher->id);
                Session::put('school_code', $teacher->school_code);

                return redirect('/dashboard')->with('success', 'Login successful!');
            } else {
                return back()->with('error', 'Login failed. Please check your Id or password.');
            }
        }
        else if($schoolAdmin){
            if (Hash::check($request->password, $schoolAdmin->password)) {
                Session::put('schoolAdminId', $schoolAdmin->id);
                Session::put('school_code', $schoolAdmin->school_code);

                return redirect('/dashboard')->with('success', 'Login successful!');
            } else {
                return back()->with('error', 'Login failed. Please check your Id or password.');
            }
        }
    }

    public function logout()
    {
        if (Session::has('schoolAdminId')) {
            Session::pull('schoolAdminId');
            return redirect('/login');
        }
        if (Session::has('loginId')) {
            Session::pull('loginId');
            return redirect('/login');
        }
        if (Session::has('studentId')) {
            Session::pull('studentId');
            return redirect('/login');
        }
        
    }

}
