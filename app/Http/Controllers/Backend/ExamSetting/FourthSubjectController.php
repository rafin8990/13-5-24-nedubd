<?php

namespace App\Http\Controllers\Backend\ExamSetting;

use App\Http\Controllers\Controller;
use App\Models\AddClass;
use App\Models\AddClassWiseGroup;
use Illuminate\Http\Request;

class FourthSubjectController extends Controller
{
    public function fourthSubject(){
        $classes=AddClass::all();
        $groups = [];
        return view('Backend.BasicInfo.ExamSetting.setForthSubject', compact('classes','groups'));
    }

    public function getGroupsByClass(Request $request)
    {
        $className = $request->input('class_name');
        $groups = AddClassWiseGroup::where('class_name', $className)->get();
        return response()->json($groups);
    }
}
