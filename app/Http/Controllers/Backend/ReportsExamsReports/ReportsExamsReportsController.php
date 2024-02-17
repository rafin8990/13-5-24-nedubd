<?php

namespace App\Http\Controllers\Backend\ReportsExamsReports;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportsExamsReportsController extends Controller
{
    public function progressReport(){
        return view('/Backend/Report(exam&result)/progressReport');
    }
    public function failList1(){
        return view('/Backend/Report(exam&result)/failList');
    }
    public function format1(){
        return view('/Backend/Report(exam&result)/format1');
    }
    public function format2(){
        return view('/Backend/Report(exam&result)/format2');
    }
    public function format3(){
        return view('/Backend/Report(exam&result)/format3');
    }
    public function gradeInfo(){
        return view('/Backend/Report(exam&result)/gradeInfo');
    }
    public function grandFinal(){
        return view('/Backend/Report(exam&result)/grandFinal');
    }
    public function meritClass(){
        return view('/Backend/Report(exam&result)/meritClass');
    }
    public function meritList(){
        return view('/Backend/Report(exam&result)/meritList');
    }
    public function passFailPercentage(){
        return view('/Backend/Report(exam&result)/passFailPercentage');
    }
  
    public function unassignedSubject(){
        return view('/Backend/Report(exam&result)/unassignedSubject');
    }
}
