<?php

namespace App\Http\Controllers\Backend\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentProfileUpdateController extends Controller
{
    public function studentProfileUpdate(){
        return view('Backend.Student.studentProfileUpdate');
    }
}
