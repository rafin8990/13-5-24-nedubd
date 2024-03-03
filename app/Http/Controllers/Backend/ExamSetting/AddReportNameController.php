<?php

namespace App\Http\Controllers\Backend\ExamSetting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddReportNameController extends Controller
{
    public function AddReportName(){
        return view ('Backend/BasicInfo/ExamSetting/addReportName');
    }
}
