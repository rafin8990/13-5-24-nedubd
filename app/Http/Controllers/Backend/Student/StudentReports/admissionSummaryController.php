<?php

namespace App\Http\Controllers\Backend\Student\StudentReports;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class admissionSummaryController extends Controller
{
    //
    public function admission_summary($school_code)
    {
        return view('Backend.Student.students(report).admissionSummary');
    }
}
