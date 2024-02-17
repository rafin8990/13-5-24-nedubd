<?php

namespace App\Http\Controllers\Backend\ExamResult;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExamResultController extends Controller
{
   

    public function exam_marks(){
        return view('/Backend/ExamResult/exam_marks');
    }
    public function exam_process(){
        return view('/Backend/ExamResult/exam_process');
    }
    public function exam_excel(){
        return view('/Backend/ExamResult/exam_excel');
    }
    public function exam_marks_delete(){
        return view('/Backend/ExamResult/exam_marks_delete');
    }
    public function exam_sms(){
        return view('/Backend/ExamResult/exam_sms');
    }
}
