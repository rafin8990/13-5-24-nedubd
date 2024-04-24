<?php

namespace App\Http\Controllers\Backend\FeesSetting\ReportFeesSettings;

use App\Http\Controllers\Controller;
use App\Models\AddClass;
use App\Models\AddPaySlipType;
use App\Models\SchoolInfo;
use Illuminate\Http\Request;

class IndividualPaySlipController extends Controller
{
    public function IndividualPaySlipView(Request $request, $school_code)
    {
        $classes = AddClass::where("school_code", $school_code)->where('action', 'approved')->get();
        $paySlipTypes = AddPaySlipType::where("school_code", $school_code)->where('action', 'approved')->get();
        return view('Backend.BasicInfo.FeesSetting.ReportFeesSettings.IndividualPaySlip', compact("classes", "paySlipTypes"));
    }


    public function PrintIndividualPaySlip(Request $request, $school_code)
    {
        $schoolInfo = SchoolInfo::where('school_code', $school_code)->first();
        $date = now();
        return view('Backend.BasicInfo.FeesSetting.ReportFeesSettings.IndividualPaySlipPrint', compact('schoolInfo', 'date', 'school_code'));
    }
}
