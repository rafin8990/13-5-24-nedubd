<?php

namespace App\Http\Controllers\Backend\Student\StudentReports;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentListWithPhotoController extends Controller
{
    public function studentListWithPhoto($school_code){
        return view('Backend.Student.students(report).studentListWithPhoto');
    }
}
