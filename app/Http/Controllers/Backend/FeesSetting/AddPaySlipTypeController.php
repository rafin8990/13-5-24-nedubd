<?php

namespace App\Http\Controllers\Backend\FeesSetting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddPaySlipTypeController extends Controller
{
    public function AddPaySlipTypeView()
    {
        return view('Backend.BasicInfo.FeesSetting.AddPaySlipType');
    }
}
