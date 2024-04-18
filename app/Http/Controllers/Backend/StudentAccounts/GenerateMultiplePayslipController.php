<?php

namespace App\Http\Controllers\Backend\StudentAccounts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GenerateMultiplePayslipController extends Controller
{
    public function GenerateMultiplePayslipView(Request $request){
        return view("Backend.StudentAccounts.GenerateMultiplePayslip");
    }
}
