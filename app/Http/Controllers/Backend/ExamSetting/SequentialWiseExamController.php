<?php

namespace App\Http\Controllers\Backend\ExamSetting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SequentialWiseExamController extends Controller
{
    public function SequentialExam(){
        return view ('Backend/BasicInfo/ExamSetting/sequentialExam');
    }
}
