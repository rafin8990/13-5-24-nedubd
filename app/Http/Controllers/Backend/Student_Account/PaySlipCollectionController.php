<?php

namespace App\Http\Controllers\Backend\Student_Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaySlipCollectionController extends Controller
{
    public function PaySlipForm(Request $request){
        return view("Backend.Student_accounts.PaySlipCollection");
    }
}
