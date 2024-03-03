<?php

namespace App\Http\Controllers\Backend\ExamSetting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewExamPublishController extends Controller
{
    public function ViewExamPublish(){
        return view ('Backend/BasicInfo/ExamSetting/viewExamPublish');
    }
}
