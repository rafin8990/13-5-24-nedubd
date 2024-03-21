<?php

namespace App\Http\Controllers\Backend\ExamSetting;

use App\Http\Controllers\Controller;

use App\Models\AddAcademicYear;
use App\Models\AddClass;
use App\Models\AddClassExam;
use App\Models\AddClassWiseSubject;
use App\Models\SetClassExamMark;
use App\Models\SetShortCode;
use Illuminate\Http\Request;

class SetExamMarksController extends Controller
{

    public function classSetExamMarks(){
        return view ('Backend/BasicInfo/ExamSetting/classSetExamMarks');
        
    }
    public function set_exam_marks(Request $request, $schoolCode)
    {
        //$school_code = '100';
        $searchClassData = null;
        $searchClassExamName = null;
        $searchAcademicYearName = null;
        $setCodeData = null;
        $shortCodeData = null;

        $classData = AddClass::where('action', 'approved')->where('school_code', $schoolCode)->get();
        $classExamData = AddClassExam::where('action', 'approved')->where('school_code', $schoolCode)->get();
        $academicYearData = AddAcademicYear::where('action', 'approved')->where('school_code', $schoolCode)->get();


        
        $className = $request->session()->get('class_name');
        $classExamName = $request->session()->get('class_exam_name');
        $academic_year_name = $request->session()->get('academic_year_name');


        $searchClassses=AddClassWiseSubject::where("school_code",$schoolCode)->where("action","approved")->where('class_name',$className)->get();

        // dd($searchClassses);


    $shortCodes=SetShortCode::where('school_code',$schoolCode)->where('action','approved')->where('class_name',$className)->where('class_exam_name',$classExamName)->where('academic_year_name',$academic_year_name)->get();

    // $subjects=AddClassWiseSubject::where('school_code',$schoolCode)->where('action', 'approved')->where('class_name',$className)->get();


        return view('Backend/BasicInfo/ExamSetting/classSetExamMarks', compact('classData', 'classExamData', 'academicYearData', 'searchClassData', 'searchClassExamName', 'searchAcademicYearName','searchClassses', 'shortCodes','className','classExamName','academic_year_name'));
    }

    public function store_exam_marks(Request $request)
    {
        $request->session()->put('school_code', $request->input('school_code'));
        return redirect()->route('set.exam.marks',$request->input('school_code'))->with([
            'class_name' => $request->input('class_name'),
            "class_exam_name"=>$request->input('class_exam_name'),
            'academic_year_name' => $request->input('academic_year_name'),
            'school_code'=>$request->input('school_code')
        ]);

    }

    public function saveSetExamMarks(Request $request){
        // dd($request);
            $subjects=$request->input('subject');
            $school_code=$request->input('school_code');
            $class_name=$request->input('class_name');
            $academic_year_name=$request->input('academic_year_name');
            $exam_name=$request->input('exam_name');
            $action = $request->input('action');
            $key=$request->input('key');
            

            foreach($subjects as $subject){
                $alreadySaveData=SetClassExamMark::where("school_code", $school_code)->where("action", "approved")->where("exam_name", $exam_name)->where("academic_year_name", $academic_year_name)->where("class_name",$class_name )->first();

                if($alreadySaveData){
                    return redirect()->back()->with('error', "Class Exam Marks for this year this class this exam already exist");
                }else{
                    foreach ($key as $id) {
                                        $examMarks = new SetClassExamMark();
                                        $examMarks->exam_name = $exam_name;
                                        $examMarks->academic_year_name = $academic_year_name;
                                        $examMarks->class_name = $class_name;
                                        $examMarks->subject_name =$subject;
                                        $examMarks->short_code = $request->short_code[$id];
                                        $examMarks->total_mark = $request->total_marks[$id];
                                        $examMarks->countable_mark = $request->countable_marks[$id];
                                        $examMarks->pass_mark = $request->pass_marks[$id];
                                        $examMarks->acceptance = $request->acceptance[$id];
                                        $examMarks->marge = $request->marge[$id];
                                        $examMarks->status = $request->status[$id];
                                        $examMarks->action = $action;
                                        $examMarks->school_code = $school_code;
                                        $examMarks->save();
                    }
                    
                }


            }
            return redirect()->back()->with('success', "Class Exam Marks set successfully");
        }
}
