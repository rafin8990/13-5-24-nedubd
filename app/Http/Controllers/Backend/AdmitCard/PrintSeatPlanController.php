<?php

namespace App\Http\Controllers\Backend\AdmitCard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrintSeatPlanController extends Controller
{
    public function printSeatPlan(){
        return view('Backend/AdmitCard/Report(admitcards)/printSeatPlan');
    }
}
