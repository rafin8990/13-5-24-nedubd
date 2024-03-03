<?php

namespace App\Http\Controllers\Backend\AdmitCard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SetAdmitCardController extends Controller
{
    public function setAdmitCard(){
        return view('Backend/AdmitCard/setAdmitCard');
    }
}
