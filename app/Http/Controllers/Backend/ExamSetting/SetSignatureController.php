<?php

namespace App\Http\Controllers\Backend\ExamSetting;

use App\Http\Controllers\Controller;
use App\Models\AddReportName;
use Illuminate\Http\Request;

class SetSignatureController extends Controller
{
    public function SetSignature(){
        $reports=AddReportName::all();
        return view ('Backend/BasicInfo/ExamSetting/setSignature', compact('reports'));
    }
}
