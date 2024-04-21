<?php

namespace App\Http\Controllers\Backend\FeesSetting;

use App\Http\Controllers\Controller;
use App\Models\AddClass;
use App\Models\AddFees;
use App\Models\AddFeeType;
use App\Models\AddGroup;
use Illuminate\Http\Request;

class FeesSetupController extends Controller
{
    public function FeesSetupView(Request $request, $school_code)
    {
        $classes = AddClass::where("school_code", $school_code)->where('action', 'approved')->get();
        $groups = AddGroup::where("school_code", $school_code)->where('action', 'approved')->get();

        $fessTypes = $request->session()->get('feesTypeData');
        $classdata = $request->session()->get('class');
        $groupdata = $request->session()->get('group');
        // dd($group);
        return view('Backend.BasicInfo.FeesSetting.FeesSetup', compact('classes', 'groups', 'school_code', 'fessTypes', 'classdata', 'groupdata'));
    }

    public function ViewFeeTypesData(Request $request, $school_code)
    {

        $fees_types = AddFeeType::where("school_code", $school_code)->where('action', 'approved')->get();

        return redirect()->route('feesSetup.view', $school_code)->with([
            'feesTypeData' => $fees_types,
            'class' => $request->class,
            'group' => $request->group
        ]);
    }

    public function add_fees_setup(Request $request, $school_code)
    {
        // dd($request->all());
        $feeTypesAndFeeAmount = array_combine($request->fee_type, $request->fee_amount);
        // dd($mergedArray);
        foreach ($feeTypesAndFeeAmount as $fee_type => $fee_amount) {
            $isFeeTypeExist = AddFees::where("school_code", $school_code)->where('action', 'approved')->where('class_name', $request->class)->where('group_name', $request->group)->where('fee_type', $fee_type)->first();
            if ($isFeeTypeExist == null) {
                $fees_setup = new AddFees();
                $fees_setup->school_code = $school_code;
                $fees_setup->class_name = $request->class;
                $fees_setup->group_name = $request->group;
                $fees_setup->fee_type = $fee_type;
                $fees_setup->fee_amount = $fee_amount;
                $fees_setup->save();
            }

        }
    }

    // public function ViewClassData()
}
