<?php

namespace App\Http\Controllers\Backend\ExamSetting;

use App\Http\Controllers\Controller;
use App\Models\AddClass;
use Illuminate\Http\Request;

class FourthSubjectController extends Controller
{
    public function fourthSubject(){
        $classes=AddClass::all();
        return view('Backend.BasicInfo.ExamSetting.setForthSubject', compact('classes'));
    }
}
