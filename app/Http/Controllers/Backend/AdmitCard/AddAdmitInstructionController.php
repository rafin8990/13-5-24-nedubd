<?php

namespace App\Http\Controllers\Backend\AdmitCard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddAdmitInstructionController extends Controller
{
 public function AddAdmitInstruction(){
    return view ('Backend/AdmitCard/Report(admitCards)/addAdmitInstruction');
 }
}
