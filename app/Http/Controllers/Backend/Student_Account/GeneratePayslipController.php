<?php

namespace App\Http\Controllers\Backend\Student_Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GeneratePayslipController extends Controller
{
    public function GeneratePayslipView(Request $request){
        return view("Backend.Student_accounts.GeneratePayslip");
    }
}
