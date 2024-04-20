<?php

namespace App\Http\Controllers\Backend\FeesSetting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaySlipSetupController extends Controller
{
    public function PaySlipSetupView()
    {
        return view('Backend.BasicInfo.FeesSetting.PaySlipSetup');
    }
}
