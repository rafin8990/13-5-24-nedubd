<?php

namespace App\Http\Controllers\Backend\FeesSetting\ReportFeesSettings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AllPaySlipController extends Controller
{
    public function AllPaySlipView()
    {
        return view('Backend.BasicInfo.FeesSetting.ReportFeesSettings.AllPaySlip');
    }
}
