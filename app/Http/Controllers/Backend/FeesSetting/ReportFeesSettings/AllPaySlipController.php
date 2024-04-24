<?php

namespace App\Http\Controllers\Backend\FeesSetting\ReportFeesSettings;

use App\Http\Controllers\Controller;
use App\Models\AddClass;
use App\Models\AddGroup;
use App\Models\AddPaySlipType;
use App\Models\SchoolInfo;
use Illuminate\Http\Request;

class AllPaySlipController extends Controller
{
    public function AllPaySlipView(Request $request, $school_code)
    {
        $classes = AddClass::where("school_code", $school_code)->where('action', 'approved')->get();
        $groups = AddGroup::where("school_code", $school_code)->where('action', 'approved')->get();
        return view('Backend.BasicInfo.FeesSetting.ReportFeesSettings.AllPaySlip', compact('classes', 'groups', 'school_code'));
    }

    public function AllPaySlipPrint(Request $request, $school_code)
    {
        $schoolInfo = SchoolInfo::where('school_code', $school_code)->first();
        $paySlipTypes = AddPaySlipType::where('school_code', $school_code)->where('action', 'approved')->get();
        $date = now();
        return view('Backend.BasicInfo.FeesSetting.ReportFeesSettings.AllPaySlipPrint', compact('schoolInfo', 'date', 'school_code', 'paySlipTypes'));
    }
}
