<?php

namespace App\Http\Controllers\Backend\Student\StudentReports;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class addShortListController extends Controller
{
    public function studentShortList(){
        return view('Backend.Student.students(report).studentShortList');
    }
}
