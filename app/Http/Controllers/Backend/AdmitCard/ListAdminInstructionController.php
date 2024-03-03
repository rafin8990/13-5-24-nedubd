<?php

namespace App\Http\Controllers\Backend\AdmitCard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListAdminInstructionController extends Controller
{
    public function ListAdminInstruction(){
        return view('Backend/AdmitCard/Report(admitCards)/listAdminInstruction');
    }
}
