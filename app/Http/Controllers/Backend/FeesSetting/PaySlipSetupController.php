<?php

namespace App\Http\Controllers\Backend\FeesSetting;

use App\Http\Controllers\Controller;
use App\Models\AddClass;
use App\Models\AddFees;
use App\Models\AddGroup;
use App\Models\AddPaySlip;
use App\Models\AddPaySlipType;
use Illuminate\Http\Request;

class PaySlipSetupController extends Controller
{
    public function PaySlipSetupView(Request $request, $school_code)
    {
        $classes = AddClass::where("school_code", $school_code)->where('action', 'approved')->get();
        $groups = AddGroup::where("school_code", $school_code)->where('action', 'approved')->get();
        $paySlipTypes = AddPaySlipType::where("school_code", $school_code)->where('action', 'approved')->get();
        $feesSetupData = $request->session()->get('FeesData');
        $paySlipTypeName = $request->session()->get('paySlipTypeSession');
        $classData = $request->session()->get('class');
        $groupData = $request->session()->get('group');

        return view('Backend.BasicInfo.FeesSetting.PaySlipSetup', compact('classes', 'groups', 'paySlipTypes', 'school_code', 'feesSetupData', 'paySlipTypeName', 'classData', 'groupData'));
    }


    public function PaySlipSetupGetData(Request $request, $school_code)
    {
        // dd($request);
        $class = $request->class;
        $group = $request->group;
        $pay_slip_type = $request->pay_slip_type;

        $FeesSetupData = AddFees::where("school_code", $school_code)->where('action', 'approved')->where('class_name', $class)->where('group_name', $group)->get();

        return redirect()->route('paySlipSetup.view', $school_code)->with([
            'FeesData' => $FeesSetupData,
            'paySlipTypeSession' => $pay_slip_type,
            'class' => $class,
            'group' => $group,
        ]);
    }

    public function StorePaySlipSetup(Request $request, $school_code)
    {
        // dd($request->all());

        $class = $request->fees_data_class;
        $group = $request->fees_data_group;
        $pay_slip_type = $request->pay_slip_type_name;

        $fee_type_names = $request->input('fee_type_name', []);
        $fee_amounts = $request->input('fees_amount', []);
        $statuses = $request->input('status', []);


        foreach ($fee_type_names as $key => $fee_type_name) {
            if (isset($statuses[$fee_type_name])) {
                $checkExistance = AddPaySlip::where("school_code", $school_code)
                    ->where('action', 'approved')
                    ->where('class_name', $class)
                    ->where('group_name', $group)
                    ->where('pay_slip_type', $pay_slip_type)
                    ->where('fee_type_name', $fee_type_name)->first();
                if (!$checkExistance) {
                    $paySlip = new AddPaySlip();
                    $paySlip->class_name = $class;
                    $paySlip->group_name = $group;
                    $paySlip->pay_slip_type = $pay_slip_type;
                    $paySlip->fee_type_name = $fee_type_name;
                    $paySlip->fees_amount = $fee_amounts[$key];
                    $paySlip->school_code = $school_code;
                    $paySlip->status = $statuses[$fee_type_name] ? 'active' : 'inactive';
                    $paySlip->save();
                }
            }
        }

        return redirect()->back()->with('success', 'Pay slip setup successful');
    }
}
