<?php

namespace App\Http\Controllers\Backend\ExamSetting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SetGrandFinalController extends Controller
{
    public function GrandFinal(){
        return view ('Backend/BasicInfo/ExamSetting/grandFinal');
    }
}
