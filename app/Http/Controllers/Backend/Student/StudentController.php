<?php

namespace App\Http\Controllers\Backend\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function AddStudentForm(){
        return view("Backend.Student.addStudent");
    }
}
