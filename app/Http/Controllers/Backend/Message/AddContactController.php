<?php

namespace App\Http\Controllers\Backend\Message;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddContactController extends Controller
{
   public function Contact(){
    return view ('Backend.Messaging.addContact');
   }
   
}
