<?php

namespace App\Http\Controllers\Backend\AdmitCard;

use App\Http\Controllers\Controller;
use App\Models\AddAcademicYear;
use App\Models\AddClass;
use App\Models\AddClassExam;
use App\Models\AddClassWiseSubject;
use App\Models\AddGroup;

use Illuminate\Http\Request;

class AddAdmitCardController extends Controller
{
    public function add_admit_card(Request $request)
    {

        $school_code = '100';

        if ($request->input('class_name')) {
            // dd($request);
            $searchClassData = $request->input('class_name');
            $searchClassExamName = $request->input('class_exam_name');
            $searchAcademicYearName = $request->input('academic_year_name');
        }


        $classData = AddClass::where('action', 'approved')->where('school_code', $school_code)->get();
        $groupData = AddGroup::where('action', 'approved')->where('school_code', $school_code)->get();
        $yearData = AddAcademicYear::where('action', 'approved')->where('school_code', $school_code)->get();
        // dd($yearData);
        $classExamData = AddClassExam::where('action', 'approved')->where('school_code', $school_code)->get();
        $classWiseSubjectData = AddClassWiseSubject::where('action', 'approved')->where('school_code', $school_code)->get();

        return view('Backend/AdmitCard/setAdmitCard', compact('classData', 'groupData', 'yearData', 'classExamData', 'classWiseSubjectData'));
    }
}
