<?php

namespace App\Http\Controllers\Backend\FeesSetting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeesSetupController extends Controller
{
    public function FeesSetupView()
    {
        return view('Backend.BasicInfo.FeesSetting.FeesSetup');
    }
}
