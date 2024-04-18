<?php

namespace App\Http\Controllers\Backend\StudentAccounts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CollectUnpaidPaySlipController extends Controller
{
    public function CollectUnpaidPaySlipView(Request $request){
        return view("Backend.StudentAccounts.CollectUnpaidPaySlip");
    }
}
