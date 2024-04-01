<?php

namespace App\Http\Controllers\Backend\ExamResult;

use App\Http\Controllers\Controller;
use App\Models\AddAcademicYear;
use App\Models\AddClass;
use App\Models\AddClassExam;
use App\Models\AddGroup;
use App\Models\AddSection;
use App\Models\AddShift;
use App\Models\AddSubject;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class MarkInputController extends Controller
{

    public function exam_marks($school_code)
    {
        $classData = AddClass::where('action', 'approved')->where('school_code', $school_code)->get();
        $groupData = AddGroup::where('action', 'approved')->where('school_code', $school_code)->get();
        $sectionData = AddSection::where('action', 'approved')->where('school_code', $school_code)->get();
        $shiftData = AddShift::where('action', 'approved')->where('school_code', $school_code)->get();
        $subjectData = AddSubject::where('action', 'approved')->where('school_code', $school_code)->get();
        $classExamData = AddClassExam::where('action', 'approved')->where('school_code', $school_code)->get();
        $academicYearData = AddAcademicYear::where('action', 'approved')->where('school_code', $school_code)->get();

        return view('/Backend/ExamResult/exam_marks', compact('classData', 'groupData', 'sectionData', 'shiftData', 'subjectData', 'classExamData', 'academicYearData'));
    }
   


    
    public function generateExcelSheet(Request $request, $school_code) {
        $tableData = [
            'Student_name' => 'Student_name',
            'Student_id' => 'Student_id',
            'class_name' => 'class_name',
            'Shift' => 'Shift',
            'Section_name' => 'Section_name',
            'Group_name' => 'Group_name',
            'Roll' => 'Roll',
            'Subject' => 'Subject',
            'Exam_name' => 'Exam_name',
            'Year' => 'Year',
            'Full_marks' => 'Full_marks',
            'T-1=25/00' => 'T-1=25/00',
            'CQ=100/00' => 'CQ=100/00',
            'T.Marks' => 'T.Marks',
            'Grade' => 'Grade',
            'GPA' => 'GPA',
            'Absent' => 'Absent',
            'school_code' => 'school_code',
        ];
    
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
    
        $headers = array_keys($tableData);
        $sheet->fromArray([$headers], NULL, 'A1');
    
        $data = array_values($tableData);
        $sheet->fromArray([$data], NULL, 'A2');
    
        $writer = new Xlsx($spreadsheet);
        $tempFilePath = tempnam(sys_get_temp_dir(), 'excel');
        $writer->save($tempFilePath);
        $fileContents = file_get_contents($tempFilePath);
        unlink($tempFilePath);
    
        return response($fileContents)
            ->header('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet')
            ->header('Content-Disposition', 'attachment; filename="table.xlsx"');
    }
}
