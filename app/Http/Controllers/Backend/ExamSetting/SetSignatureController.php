<?php

namespace App\Http\Controllers\Backend\ExamSetting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SetSignatureController extends Controller
{
    public function SetSignature(){
        return view ('Backend/BasicInfo/ExamSetting/setSignature');
    }
}
