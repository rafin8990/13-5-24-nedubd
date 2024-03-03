<?php

namespace App\Http\Controllers\Backend\AdmitCard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrintAdmitCardController extends Controller
{
    public function printAdmitCard(){
        return view ('Backend/AdmitCard/Report(admitCards)/printAdmitCard');
    }
}
