<?php

namespace App\Http\Controllers\Backend\StudentAccounts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditGeneratedPayslipController extends Controller
{
    public function EditGeneratedPayslipView(Request $request){
        return view("Backend.StudentAccounts.EditGeneratedPayslip");
    }
}
