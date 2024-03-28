<?php

namespace App\Http\Controllers\Backend\Student\StudentReports;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class classSectionSTdTotalController extends Controller
{
    //
    public function classSectionSTdTotal($school_code)
    {
        return view('Backend.Student.students(report).classSectionSTdTotal');
    }
}
