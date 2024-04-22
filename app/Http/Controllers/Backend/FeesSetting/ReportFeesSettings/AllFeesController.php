<?php

namespace App\Http\Controllers\Backend\FeesSetting\ReportFeesSettings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AllFeesController extends Controller
{
    public function AllFeesView()
    {
        return view('Backend.BasicInfo.FeesSetting.ReportFeesSettings.AllFees');
    }
}
