<?php

namespace App\Http\Controllers\Backend\Message;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SendMSGController extends Controller
{
    public function message(){
        return view ('Backend.Messaging.sendMessage');
       }
}
