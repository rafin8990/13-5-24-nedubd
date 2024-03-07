<?php

namespace App\Http\Controllers\Backend\ExamSetting;

use App\Http\Controllers\Controller;
use App\Models\AddAcademicYear;
use App\Models\AddClass;
use App\Models\AddClassExam;
use App\Models\AddGradePoint;
use App\Models\GradeSetup;
use Illuminate\Http\Request;

class GradeSetupController extends Controller
{
    public function grade_setup(Request $request)
    {

        $school_code = '100';

        $gradePointData = AddGradePoint::where('action', 'approved')->where('school_code', $school_code)->get();

        $classData = AddClass::where('action', 'approved')->where('school_code', $school_code)->get();
        $academicYearData = AddAcademicYear::where('action', 'approved')->where('school_code', $school_code)->get();
        $classExamData = AddClassExam::where('action', 'approved')->where('school_code', $school_code)->get();

        $classExamName = $request->session()->get('class_exam_name');
        $academic_year_name = $request->session()->get('academic_year_name');
        // dd($classExamName);

        $gradesetup=GradeSetup::where("school_code",$school_code)->get();

        // dd($gradesetup);


        return view('Backend/BasicInfo/ExamSetting/gradeSetup', compact('gradePointData', 'classData', 'academicYearData', 'classExamData', 'classExamName', 'academic_year_name','gradesetup'));
    }

    public function addGradeSetup(Request $request)
    {
        return redirect()->route('set.grade.setup')->with([
            'class_exam_name' => $request->class_exam_name,
            'academic_year_name' => $request->academic_year_name,

        ]);
    }

    public function saveGradeSetup(Request $request)
    {

        $classExamName = $request->input('class_exam_name');
        $academicYearName = $request->input('academic_year_name');
        $classNames = $request->input('class_name'); // Assuming this is an array

        // Other input values
        $letterGrade = json_encode($request->input('latter_grade'));
        $gradePoint = json_encode($request->input('grade_point'));
        $markPoint1st = json_encode($request->input('mark_point_1st'));
        $markPoint2nd = json_encode($request->input('mark_point_2nd'));
        $status = json_encode($request->input('status'));
        $action = $request->input('action');
        $school_code = "100";

        


        foreach ($classNames as $class) {

            $alreadySaveDGrade=GradeSetup::where("school_code", $school_code)->where("action", "approved")->where("class_exam_name", $classExamName)->where("academic_year_name", $academicYearName)->where("class_name",$class )->first();

            if($alreadySaveDGrade){
                return redirect()->back()->with('error', "grade setup for this year this class this exam already exist");
            }else{
                $gradeSetup = new GradeSetup();
                $gradeSetup->class_exam_name = $classExamName;
                $gradeSetup->academic_year_name = $academicYearName;
                $gradeSetup->class_name = $class;
                $gradeSetup->latter_grade = $letterGrade;
                $gradeSetup->grade_point = $gradePoint;
                $gradeSetup->mark_point_1st = $markPoint1st;
                $gradeSetup->mark_point_2nd = $markPoint2nd;
                $gradeSetup->status = $status;
                $gradeSetup->action = $action;
                $gradeSetup->school_code = $school_code;
                // dd($gradeSetup);
                $gradeSetup->save();
            }
            
        }

        return redirect()->back()->with('success', 'Grade Setup added successfully!');
    }


}
