<?php

namespace App\Http\Controllers\Backend\FeesSetting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WaiverTypeController extends Controller
{
    public function WaiverTypeView()
    {
        return view('Backend.BasicInfo.FeesSetting.WaiverType');
    }
}
