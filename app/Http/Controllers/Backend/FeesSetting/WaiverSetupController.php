<?php

namespace App\Http\Controllers\Backend\FeesSetting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WaiverSetupController extends Controller
{
    public function WaiverSetupView()
    {
        return view('Backend.BasicInfo.FeesSetting.WaiverSetup');
    }
}
