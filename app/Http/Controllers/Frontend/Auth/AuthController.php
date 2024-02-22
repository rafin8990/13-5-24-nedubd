<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Student;
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

        $student = Student::where('student_id', $request->name)->orWhere('email', $request->name)->first();

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
    }

}
