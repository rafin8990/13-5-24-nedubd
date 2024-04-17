<?php

namespace App\Http\Controllers\Backend\StudentAccounts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewStdAddPaySlipController extends Controller
{
    public function NewStdAddPaySlipView(Request $request){
        return view("Backend.StudentAccounts.NewStdAddPaySlip");
    }
}
