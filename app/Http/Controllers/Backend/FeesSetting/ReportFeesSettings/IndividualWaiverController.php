<?php

namespace App\Http\Controllers\Backend\FeesSetting\ReportFeesSettings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndividualWaiverController extends Controller
{
    public function IndividualWaiverView()
    {
        return view('Backend.BasicInfo.FeesSetting.ReportFeesSettings.IndividualWaiver');
    }
}
