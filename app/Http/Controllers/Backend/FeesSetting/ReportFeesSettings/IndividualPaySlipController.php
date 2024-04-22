<?php

namespace App\Http\Controllers\Backend\FeesSetting\ReportFeesSettings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndividualPaySlipController extends Controller
{
    public function IndividualPaySlipView()
    {
        return view('Backend.BasicInfo.FeesSetting.ReportFeesSettings.IndividualPaySlip');
    }
}
