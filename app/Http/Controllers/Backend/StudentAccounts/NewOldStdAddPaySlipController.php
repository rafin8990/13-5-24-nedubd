<?php

namespace App\Http\Controllers\Backend\StudentAccounts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewOldStdAddPaySlipController extends Controller
{
    public function NewOldStdAddPaySlipView(Request $request){
        return view("Backend.StudentAccounts.NewOldStdAddPaySlip");
    }
}
