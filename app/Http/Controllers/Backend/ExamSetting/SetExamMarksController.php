<?php

namespace App\Http\Controllers\Backend\ExamSetting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SetExamMarksController extends Controller
{
    public function classSetExamMarks(){
        return view ('Backend/BasicInfo/ExamSetting/classSetExamMarks');
    }
}
