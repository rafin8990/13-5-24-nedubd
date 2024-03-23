<?php

namespace App\Http\Controllers\Backend\Student;

use App\Http\Controllers\Controller;
use App\Models\AddAcademicSession;
use App\Models\AddAcademicYear;
use App\Models\AddClass;
use App\Models\AddClassWiseGroup;
use App\Models\AddClassWiseSection;
use App\Models\AddGroup;
use App\Models\AddSection;
use App\Models\Student;
use Illuminate\Http\Request;

class UpdateStudentBasicInfoController extends Controller
{
    public function updateStudentBasicInfo(Request $request, $schoolCode)
    {
        $student = null;
        //dd($studentData);
        $Year = AddAcademicYear::where('action', 'approved')->where('school_code', $schoolCode)->get();
        $Session = AddAcademicSession::where('action', 'approved')->where('school_code', $schoolCode)->get();
        $classData = AddClass::where('action', 'approved')->where('school_code', $schoolCode)->get();
        $groupData = AddGroup::where('action', 'approved')->where('school_code', $schoolCode)->get();
        $sectionData = AddSection::where('action', 'approved')->where('school_code', $schoolCode)->get();
        return view('Backend.Student.updateStudentBasicInfo', compact('classData', 'groupData', 'sectionData', 'Year', 'Session', 'student'));
    }
    public function getData(Request $request, $schoolCode)
    {
        $student = null;
        $selectedClassName = $request->input('class_name');
        $selectedGroupName = $request->input('group');
        $selectedSectionName = $request->input('section');
        $selectedYear = $request->input('year');
        $selectedSesion = $request->input('session');



        $student = Student::where('action', 'approved')
            ->where('school_code', $schoolCode)
            ->where('class_name', $selectedClassName)
            ->where('group', $selectedGroupName)
            ->where('section', $selectedSectionName)
            ->where('year', $selectedYear)
            ->where('session', $selectedSesion)
            ->get();
        //dd($student);


        $Year = AddAcademicYear::where('action', 'approved')->where('school_code', $schoolCode)->get();
        $Session = AddAcademicSession::where('action', 'approved')->where('school_code', $schoolCode)->get();
        $classData = AddClass::where('action', 'approved')->where('school_code', $schoolCode)->get();
        $groupData = AddClassWiseGroup::where('action', 'approved')->where('school_code', $schoolCode)->get();
        $sectionData = AddClassWiseSection::where('action', 'approved')->where('school_code', $schoolCode)->get();

        if ($student->isNotEmpty()) {
            return view('Backend.Student.updateStudentBasicInfo', compact('classData', 'groupData', 'sectionData', 'Year', 'Session','student'))->with([
                'success' => 'Student found successfully!',
                'class_name' => $request->class_name,
                'group' => $request->group,
                'section' => $request->section,
                'year' => $request->year,
                'session' => $request->session,
    
            ]);
          
        }
      

            return redirect()->route('updateStudentBasicInfo',$schoolCode)->with('error','Student Data Not Found');
               
        

      
        


    }

    public function updateStudentBasic(Request $request,$schoolCode)
    {

        // dd($request);
        if($request->id !== null){

            foreach ($request->id as $id) {
                $resulf = Student::where('id', $id)
                    ->update([
                        'student_roll' => $request->student_roll[$id],
                        'student_id' => $request->student_id[$id],
                        'first_name' => $request->first_name[$id],
                        'last_name' => $request->last_name[$id],
                        'father_name' => $request->father_name[$id],
                        'father_nid' => $request->father_nid[$id],
                        'mother_name' => $request->mother_name[$id],
                        'mother_nid' => $request->mother_nid[$id],
                        'birth_date' => $request->birth_date[$id],
                        'gender' => $request->gender[$id],
                        'religious' => $request->religious[$id],
                        'blood_group' => $request->blood_group[$id],
                        'father_mobile' => $request->father_mobile[$id],
                    ]);
                    return redirect()->route('updateStudentBasicInfo',$schoolCode)->with([
                        'success' => 'Student update successfully!',
                    ]);
            }
    
            
        }
        return redirect()->route('updateStudentBasicInfo',$schoolCode)->with([
            'error' => 'No data selected!' ]);

    }
}
