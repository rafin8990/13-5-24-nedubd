<?php

namespace App\Http\Controllers\Backend\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploadPhotoController extends Controller
{
    public function uploadStudentPhoto(){
        return view('Backend.Student.updateUploadPhoto');
    }
    public function uploadPhoto(){
        return view('Backend.Student.uploadPhoto');
    }
}
