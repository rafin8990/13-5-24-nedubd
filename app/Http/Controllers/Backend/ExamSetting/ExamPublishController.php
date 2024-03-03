<?php

namespace App\Http\Controllers\Backend\ExamSetting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExamPublishController extends Controller
{
    public function ExamPublish(){
        return view ('Backend/BasicInfo/ExamSetting/examPublish');
    }
}
