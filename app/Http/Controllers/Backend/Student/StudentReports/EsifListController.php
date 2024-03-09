<?php

namespace App\Http\Controllers\Backend\Student\StudentReports;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EsifListController extends Controller
{
    public function e_sifList(){
        return view('Backend.Student.students(report).e-SIFList');
    }
}
