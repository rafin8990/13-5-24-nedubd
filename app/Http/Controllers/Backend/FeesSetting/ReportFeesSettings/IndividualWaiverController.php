<?php

namespace App\Http\Controllers\Backend\FeesSetting\ReportFeesSettings;

use App\Http\Controllers\Controller;
use App\Models\SchoolInfo;
use App\Models\Waiver;
use Illuminate\Http\Request;

class IndividualWaiverController extends Controller
{
    public function IndividualWaiverView(Request $request, $school_code)
    {
        $individualPaySlipsData = Waiver::where("waivers.schoolCode", $school_code)
            ->where('waivers.action', 'approved')
            // ->join('add_fees', 'fee_id', '=', 'add_fees.id')
            ->join('students', 'waivers.student_id', '=', 'students.id')
            ->select('waivers.*', 'students.Class_name', 'students.nedubd_student_id', 'students.id', 'students.name')
            ->get();

        $classes = [];
        $students_id = [];
        $waiver_types = [];
        foreach ($individualPaySlipsData as $key => $paySlip) {
            if (!in_array($paySlip->Class_name, $classes)) {
                $classes[] = $paySlip->Class_name;
            }
            if (!in_array($paySlip->student_id, $students_id)) {
                $custom = $paySlip->nedubd_student_id . ' - ' . $paySlip->name;
                $students_id[$paySlip->student_id] = $custom;
            }
            if (!in_array($paySlip->waiver_type_name, $waiver_types)) {
                $waiver_types[] = $paySlip->waiver_type_name;
            }
        }

        return view('Backend.BasicInfo.FeesSetting.ReportFeesSettings.IndividualWaiver', compact('classes', 'students_id', 'waiver_types', 'school_code'));
    }

    public function GetDataIndividualWaiver(Request $request, $school_code)
    {
        $individualWaiverData = Waiver::where("waivers.schoolCode", $school_code)
            ->where('waivers.action', 'approved')
            ->join('add_fees', 'fee_id', '=', 'add_fees.id')
            ->join('students', 'waivers.student_id', '=', 'students.id')
            ->select('waivers.*', 'students.name', 'students.nedubd_student_id', 'add_fees.fee_amount', 'add_fees.fee_type')
            ->where('students.Class_name', $request->input('class'))
            ->where('waivers.student_id', $request->input('student_id'))
            ->where('waivers.waiver_type_name', $request->input('waiver_type'))
            ->get();

        $totalFeeAmount = 0;
        $totalDiscount = 0;
        foreach ($individualWaiverData as $key => $waiver) {
            $totalFeeAmount += $waiver->fee_amount;
            $totalDiscount += ($waiver->fee_amount / 100) * $waiver->waiver_percentage;
        }

        $schoolInfo = SchoolInfo::where('school_code', $school_code)->first();
        $date = now();
        return view('Backend.BasicInfo.FeesSetting.ReportFeesSettings.IndividualWaiverPrint', compact('schoolInfo', 'date', 'individualWaiverData', 'totalFeeAmount', 'totalDiscount'));
    }
}
