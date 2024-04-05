<?php

namespace App\Http\Controllers\Backend\Message;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExcelMSGController extends Controller
{
    public function excelMsg(){
        return view ('Backend.Messaging.msgExcelFile');
       }
}
