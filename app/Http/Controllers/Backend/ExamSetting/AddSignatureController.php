<?php

namespace App\Http\Controllers\Backend\ExamSetting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddSignatureController extends Controller
{
    public function AddSignature(){
        return view ('Backend/BasicInfo/ExamSetting/addSignature');
    }
}
