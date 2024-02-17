<?php

namespace App\Http\Controllers\Backend\GrandFinal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GrandFinalController extends Controller
{
    public function grandFailList(){
        return view('/Backend/Grand_Final/grandFailList');
    }
    public function grandFinalProcess(){
        return view('/Backend/Grand_Final/grandFinalProcess');
    }
    public function grandMeritList(){
        return view('/Backend/Grand_Final/grandMeritList');
    }
    public function grandProgressReport(){
        return view('/Backend/Grand_Final/grandProgressReport');
    }
    public function passFailPercentage2(){
        return view('/Backend/Grand_Final/passFailPercentage');
    }
    public function setupGrand(){
        return view('/Backend/Grand_Final/setupGrand');
    }
}
