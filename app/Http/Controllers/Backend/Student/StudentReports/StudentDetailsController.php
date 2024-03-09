<?php

namespace App\Http\Controllers\Backend\Student\StudentReports;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentDetailsController extends Controller
{
    public function StudentDetails(){
        return view('Backend.Student.students(report).studentDetails');
    }
}
