<?php

namespace App\Http\Controllers\Backend\NEDUBD;

use App\Http\Controllers\Controller;
use App\Models\SchoolInfo;
use Illuminate\Http\Request;

class SchoolAdminController extends Controller
{
    public function addSchoolAdmin()
    {
        $schools=SchoolInfo::all(); 
        return view("Backend.NEDUBD.addSchoolAdmin", compact("schools"));
    }

    public function createSchoolAdmin(Request $request){
        dd($request);
    }
}
