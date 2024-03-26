<?php

use App\Http\Controllers\Backend\AdmitCard\AddAdmitCardController;
use App\Http\Controllers\Backend\CommonSetting\AddAcademicSessionController;
use App\Http\Controllers\Backend\CommonSetting\AddAcademicYearController;
use App\Http\Controllers\Backend\CommonSetting\AddBoardExamController;
use App\Http\Controllers\Backend\CommonSetting\AddCategoryController;
use App\Http\Controllers\Backend\CommonSetting\AddClassController;
use App\Http\Controllers\Backend\CommonSetting\AddClassExamController;
use App\Http\Controllers\Backend\CommonSetting\AddClassWiseGroupController;
use App\Http\Controllers\Backend\CommonSetting\AddClassWiseSectionController;
use App\Http\Controllers\Backend\CommonSetting\AddClassWiseShiftController;

use App\Http\Controllers\Backend\CommonSetting\AddGroupController;
use App\Http\Controllers\Backend\CommonSetting\AddPeriodController;
use App\Http\Controllers\Backend\CommonSetting\AddSectionController;
use App\Http\Controllers\Backend\CommonSetting\AddShiftController;
use App\Http\Controllers\Backend\CommonSetting\AddSubjectController;
use App\Http\Controllers\Backend\CommonSetting\AddSubjectSetupController;

use App\Http\Controllers\Backend\CommonSetting\InstituteInfoController;
use App\Http\Controllers\Backend\Dashboard\DashboardController;
use App\Http\Controllers\Backend\ExamSetting\FourthSubjectController;
use App\Http\Controllers\Backend\NEDUBD\NEDUBDController;
use App\Http\Controllers\Backend\NEDUBD\SchoolAdminController;
use App\Http\Controllers\Backend\Student\StudentController;
use App\Http\Controllers\Backend\Student\UpdateStudentBasicInfoController;
use App\Http\Controllers\Backend\Student\UpdateStudentClassInfoController;
use App\Http\Controllers\Backend\Student\StudentProfileUpdateController;
use App\Http\Controllers\Backend\Student\UploadPhotoController;
use App\Http\Controllers\Backend\Student\studentReports\StudentDetailsController;
use App\Http\Controllers\Backend\Student\studentReports\addShortListController;
use App\Http\Controllers\Backend\Student\studentReports\StudentListWithPhotoController;
use App\Http\Controllers\Backend\Student\studentReports\EsifListController;
use App\Http\Controllers\Backend\Student\UploadExcelFileController;
use App\Http\Controllers\Backend\Teacher\TeacherController;
use App\Http\Controllers\Frontend\Auth\AuthController;
use App\Http\Controllers\Backend\ExamResult\ExamResultController;
use App\Http\Controllers\Backend\ExamResult\ExamProcessController;

use App\Http\Controllers\Backend\ExamSetting\AddGradePointController;
use App\Http\Controllers\Backend\ExamSetting\AddShortCodeController;
use App\Http\Controllers\Backend\ExamSetting\GradeSetupController;
use App\Http\Controllers\Backend\ExamSetting\SetExamMarksController;
use App\Http\Controllers\Backend\ExamSetting\SetShortCodeController;
use App\Http\Controllers\Backend\ExamSetting\AddReportNameController;
use App\Http\Controllers\Backend\ExamSetting\AddSignatureController;
use App\Http\Controllers\Backend\ExamSetting\ExamPublishController;
use App\Http\Controllers\Backend\ExamSetting\SetGrandFinalController;
use App\Http\Controllers\Backend\ExamSetting\SequentialWiseExamController;
use App\Http\Controllers\Backend\ExamSetting\SetSignatureController;
use App\Http\Controllers\Backend\ExamSetting\ViewExamPublishController;
use App\Http\Controllers\Backend\ExamSetting\ViewExamMarkSetUpController;

use App\Http\Controllers\Backend\GrandFinal\GrandFinalController;
use App\Http\Controllers\Backend\GrandFinal\GrandFinalListController;
use App\Http\Controllers\Backend\ReportsExamsReports\ReportsExamsReportsController;
use App\Http\Controllers\Backend\AdmitCard\SetAdmitCardController;
use App\Http\Controllers\Backend\AdmitCard\PrintAdmitCardController;
use App\Http\Controllers\Backend\AdmitCard\PrintSeatPlanController;
use App\Http\Controllers\Backend\AdmitCard\AddAdmitInstructionController;
use App\Http\Controllers\Backend\AdmitCard\ListAdminInstructionController;
use App\Http\Controllers\Backend\AdmitCard\ExamBlankSheetController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/login-user', [AuthController::class, 'loginUser'])->name('login-user');



Route::prefix('dashboard')->group(function () {
    Route::get('/{schoolCode}', [DashboardController::class, 'index'])->name('dashboard.index');
    // NEDUBD Module 
    Route::get('/addAdmin', [NEDUBDController::class, 'addAdmin']);
    Route::post('/create-admin', [NEDUBDController::class, 'createAdmin'])->name('admin.add');
    Route::get('/addSchoolInfo', [NEDUBDController::class, 'addSchoolInfo']);
    Route::post('/create-schoolInfo', [NEDUBDController::class, 'createSchoolInfo'])->name('schoolInfo.add');



    // student module
    Route::post('/create-student', [StudentController::class, 'addStudent'])->name('student.add');
    Route::get('/add-student/{schoolCode}', [StudentController::class, 'AddStudentForm'])->name('AddStudentForm');
    //Update Student Basdic Info
    Route::get('/updateStudentBasicInfo/{schoolCode}', [UpdateStudentBasicInfoController::class, 'updateStudentBasicInfo'])->name('updateStudentBasicInfo');
    Route::get('/getData/{schoolCode}', [UpdateStudentBasicInfoController::class, 'getData'])->name('getData');
    Route::put('/updateData/{schoolCode}', [UpdateStudentBasicInfoController::class, 'updateStudentBasic'])->name('updateStudent');
    //Update student Student Class Info
    Route::get('/studentClassInfo/{schoolCode}', [UpdateStudentClassInfoController::class, 'studentClassInfo'])->name('studentClassInfo');
    Route::get('/getStudentClassData/{schoolCode}', [UpdateStudentClassInfoController::class, 'getStudentClassData'])->name('getStudentClassData');
    Route::put('/updateStudentClass/{schoolCode}', [UpdateStudentClassInfoController::class, 'updateStudentClass'])->name('updateStudentClass');
    Route::delete('/deleteStudent/{schoolCode}/{ids}', [UpdateStudentClassInfoController::class, 'delete'])->name('deleteStudent');
    //update student profile
    Route::get('/studentProfileUpdate/{schoolCode}', [StudentProfileUpdateController::class, 'studentProfileUpdate'])->name('studentProfileUpdate');
    Route::get('/uploadExelFile/{schoolCode}', [UploadExcelFileController::class, 'uploadExelFile'])->name('uploadExelFile');
    //upload photostudent
    Route::get('/uploadStudentPhoto/{schoolCode}', [UploadPhotoController::class, 'uploadStudentPhoto'])->name('StudentPhoto');
    Route::get('/download-demo/{schoolCode}', [UploadExcelFileController::class, 'downloadDemo'])->name('download.demo');
    Route::post('/upload-excel', [UploadExcelFileController::class, 'uploadExcel'])->name('upload.excel');


    

    // Student Report
    Route::get('/studentDetails',[StudentDetailsController::class,'studentDetails']);
    Route::get('/studentShortList',[addShortListController::class,'studentShortList']);
    Route::get('/studentListWithPhoto',[StudentListWithPhotoController::class,'studentListWithPhoto']);
    Route::get('/e_sifLists',[EsifListController::class,'e_sifList']);








    // exam-Result --------------------------------------
    Route::get('/exam_marks/{school_code}', [ExamResultController::class, 'exam_marks']);
    Route::get('/exam_process/{schoolCode}', [ExamProcessController::class, 'exam_process']);
    Route::get('/getStudents/{schoolCode}/{class}/{group}/{section}', [ExamProcessController::class, 'getStudents']);
    Route::get('/exam_excel/{schoolCode}', [ExamResultController::class, 'exam_excel']);
    Route::get('/exam_marks_delete/{schoolCode}', [ExamResultController::class, 'exam_marks_delete']);
    Route::get('/exam_sms/{schoolCode}', [ExamResultController::class, 'exam_sms']);





    // exam-report
    Route::get('/progressReport', [ReportsExamsReportsController::class, 'progressReport']);
    Route::get('/exam-failList', [ReportsExamsReportsController::class, 'failList1']);
    Route::get('/tebular-format1', [ReportsExamsReportsController::class, 'format1']);
    Route::get('/tebular-format2', [ReportsExamsReportsController::class, 'format2']);
    Route::get('/tebular-format3', [ReportsExamsReportsController::class, 'format3']);
    Route::get('/gradeInfo', [ReportsExamsReportsController::class, 'gradeInfo']);
    Route::get('/grandFinal', [ReportsExamsReportsController::class, 'grandFinal']);
    Route::get('/meritClass', [ReportsExamsReportsController::class, 'meritClass']);
    Route::get('/meritList', [ReportsExamsReportsController::class, 'meritList']);
    Route::get('/passFailPercentage', [ReportsExamsReportsController::class, 'passFailPercentage']);
    Route::get('/unassignedSubject', [ReportsExamsReportsController::class, 'unassignedSubject']);


    //grand final
    Route::get('/grand_fail_list', [GrandFinalController::class, 'grandFailList']);
    Route::get('/grand_exam_final_process', [GrandFinalController::class, 'grandFinalProcess']);
    Route::get('/grand_merit_list', [GrandFinalController::class, 'grandMeritList']);
    Route::get('/grand_exam_progress_report', [GrandFinalController::class, 'grandProgressReport']);
    Route::get('/grand_result_pass_fail_percentage', [GrandFinalController::class, 'passFailPercentage']);
    Route::get('/grand_exam_setup/{schoolCode}', [GrandFinalController::class, 'setupGrand']);
    Route::get('/grandFinalList/{schoolCode}', [GrandFinalListController::class, 'grandFinalList'])->name('grandFinalList');
    Route::post('/viewGrandFinal/{schoolCode}', [GrandFinalListController::class, 'viewGrandFinal'])->name('viewGrandFinal');
    

    // teacher routes
    Route::get('/teachers/{schoolCode}', [TeacherController::class, 'teachers'])->name('teachers');
    Route::get('/addteacher', [TeacherController::class, 'addTeachers']);
    Route::post('/create-teacher', [TeacherController::class, 'addteacher'])->name('teacher.add');
    Route::get('/teacher/{id}/edit', [TeacherController::class, 'edit'])->name('teachers.edit');
    Route::put('/teacher/{id}/update', [TeacherController::class, 'update'])->name('teachers.update');
    Route::get('/teachers/{id}/teacherview', [TeacherController::class, 'view'])->name('teachers.view');
    Route::delete('/techers/{id}', [TeacherController::class, 'Deleteteacher'])->name('teacher.delete');



    // Common Setting start .............................................................................................................


    // Add Class
    Route::get('/addClass/{schoolCode}', [AddClassController::class, 'add_class'])->name('add.class');
    Route::put('/addClass/{schoolCode}', [AddClassController::class, 'store_add_class'])->name('store.class');
    Route::delete('/delete_class/{id}', [AddClassController::class, 'delete_add_class'])->name('delete.class');

    // Add Section
    Route::get('/addSection/{schoolCode}', [AddSectionController::class, 'add_section'])->name('add.section');
    Route::put('/addSection/{schoolCode}', [AddSectionController::class, 'store_add_section'])->name('store.section');
    Route::delete('/delete_section/{id}', [AddSectionController::class, 'delete_add_section'])->name('delete.section');

    // Add Shift
    Route::get('/addShift/{schoolCode}', [AddShiftController::class, 'add_shift'])->name('add.shift');
    Route::put('/addShift/{schoolCode}', [AddShiftController::class, 'store_add_shift'])->name('store.shift');
    Route::delete('/delete_shift/{id}', [AddShiftController::class, 'delete_add_shift'])->name('delete.shift');

    // Add Group
    Route::get('/addGroup/{schoolCode}', [AddGroupController::class, 'add_group'])->name('add.group');
    Route::put('/addGroup/{schoolCode}', [AddGroupController::class, 'store_add_group'])->name('store.group');
    Route::delete('/delete_group/{id}', [AddGroupController::class, 'delete_add_group'])->name('delete.group');

    // Add Subject
    Route::get('/addSubject/{schoolCode}', [AddSubjectController::class, 'add_subject'])->name('add.subject');
    Route::put('/addSubject/{schoolCode}', [AddSubjectController::class, 'store_add_subject'])->name('store.subject');
    Route::delete('/delete_subject/{id}', [AddSubjectController::class, 'delete_add_subject'])->name('delete.subject');


    // Add academic session
    Route::get('/addAcademicSession/{schoolCode}', [AddAcademicSessionController::class, 'add_academic_session'])->name('add.academic.session');
    Route::put('/addAcademicSession/{schoolCode}', [AddAcademicSessionController::class, 'store_add_academic_session'])->name('store.academic.session');
    Route::delete('/delete_academic_session/{id}', [AddAcademicSessionController::class, 'delete_add_academic_session'])->name('delete.academic.session');

    // Add academic year
    Route::get('/addAcademicYear/{schoolCode}', [AddAcademicYearController::class, 'add_academic_year'])->name('add.academic.year');
    Route::put('/addAcademicYear/{schoolCode}', [AddAcademicYearController::class, 'store_add_academic_year'])->name('store.academic.year');
    Route::delete('/delete_academic_Year/{id}', [AddAcademicYearController::class, 'delete_add_academic_year'])->name('delete.academic.year');

    // Add board exam
    Route::get('/addBoardExam/{schoolCode}', [AddBoardExamController::class, 'add_board_exam'])->name('add.board.exam');
    Route::put('/addBoardExam/{schoolCode}', [AddBoardExamController::class, 'store_add_board_exam'])->name('store.board.exam');
    Route::delete('/delete_board_exam/{id}', [AddBoardExamController::class, 'delete_add_board_exam'])->name('delete.board.exam');

    // Add category
    Route::get('/addCategory/{schoolCode}', [AddCategoryController::class, 'add_category'])->name('add.category');
    Route::put('/addCategory/{schoolCode}', [AddCategoryController::class, 'store_add_category'])->name('store.category');
    Route::delete('/delete_category/{id}', [AddCategoryController::class, 'delete_add_category'])->name('delete.category');

    // Add board exam
    Route::get('/addClassExam/{schoolCode}', [AddClassExamController::class, 'add_class_exam'])->name('add.class.exam');
    Route::put('/addClassExam/{schoolCode}', [AddClassExamController::class, 'store_add_class_exam'])->name('store.class.exam');
    Route::delete('/delete_class_exam/{id}', [AddClassExamController::class, 'delete_add_class_exam'])->name('delete.class.exam');

    // Add class wise group
    Route::get('/addClassWiseGroup/{schoolCode}', [AddClassWiseGroupController::class, 'add_class_wise_group'])->name('add.class.wise.group');
    Route::post('/addClassWiseGroup/{schoolCode}', [AddClassWiseGroupController::class, 'store_add_class_wise_group'])->name('store.class.wise.group');
    Route::delete('/delete_class_wise_group/{id}', [AddClassWiseGroupController::class, 'delete_add_class_wise_group'])->name('delete.class.wise.group');

    // Add class wise section
    Route::get('/addClassWiseSection/{schoolCode}', [AddClassWiseSectionController::class, 'add_class_wise_section'])->name('add.class.wise.section');
    Route::post('/addClassWiseSection/{schoolCode}', [AddClassWiseSectionController::class, 'store_add_class_wise_section'])->name('store.class.wise.section');
    Route::delete('/delete_class_wise_section/{id}', [AddClassWiseSectionController::class, 'delete_add_class_wise_section'])->name('delete.class.wise.section');

    // Add class wise shift
    Route::get('/addClassWiseShift/{schoolCode}', [AddClassWiseShiftController::class, 'add_class_wise_shift'])->name('add.class.wise.shift');
    Route::post('/addClassWiseShift/{schoolCode}', [AddClassWiseShiftController::class, 'store_add_class_wise_shift'])->name('store.class.wise.shift');
    Route::delete('/delete_class_wise_shift/{id}', [AddClassWiseShiftController::class, 'delete_add_class_wise_shift'])->name('delete.class.wise.shift');

    // Add category
    Route::get('/addPeriod/{schoolCode}', [AddPeriodController::class, 'add_period'])->name('add.period');
    Route::put('/addPeriod/{schoolCode}', [AddPeriodController::class, 'store_add_period'])->name('store.period');
    Route::delete('/delete_period/{id}', [AddPeriodController::class, 'delete_add_period'])->name('delete.period');

    // Add Institute Info
    Route::get('/addInstituteInfo', [InstituteInfoController::class, 'add_institute_info'])->name('add.institute.info');
    Route::put('/addInstituteInfo', [InstituteInfoController::class, 'store_add_institute_info'])->name('store.institute.info');


    // Add Subject Setup
    Route::get('/addSubjectSetup/{schoolCode}', [AddSubjectSetupController::class, 'add_subject_setup'])->name('add.subject.setup');
    Route::put('/addSubjectSetup/{schoolCode}', [AddSubjectSetupController::class, 'store_add_subject_setup'])->name('store.subject.setup');
    Route::put('/updateSubjectSetup/{schoolCode}', [AddSubjectSetupController::class, 'updateSubjectSetup'])->name('update.setSubject');

  
    // Common Setting End .............................................................................................................



    // Exam Setting Start .............................................................................................................

    // Add Grade Point
    Route::get('/addGradePoint/{schoolCode}', [AddGradePointController::class, 'add_grade_point'])->name('add.grade.point');
    Route::put('/addGradePoint/{schoolCode}', [AddGradePointController::class, 'store_add_grade_point'])->name('store.grade.point');
    Route::delete('/delete_grade_point/{id}', [AddGradePointController::class, 'delete_add_grade_point'])->name('delete.grade.point');

    // Grade Setup
    Route::get('/setGradeSetup/{schoolCode}', [GradeSetupController::class, 'grade_setup'])->name('set.grade.setup');
    // Route::delete('/delete_set_grade_setup/{id}', [GradeSetupController::class, 'delete_set_grade_setup'])->name('delete.set.grade.setup');
    Route::post('/addGradeSetup/{schoolCode}',[GradeSetupController::class,'addGradeSetup'])->name('addGradeSetup');
    Route::post('/saveGradeSetup/{schoolCode}',[GradeSetupController::class,'saveGradeSetup'])->name('saveGradeSetup');

    Route::get('/viewGradeSetup/{schoolCode}',[GradeSetupController::class,'viewGradeSetup'])->name('viewGradeSetup');
    Route::post('/getGradeSetup/{schoolCode}',[GradeSetupController::class,'viewGradeSetupData'])->name('getGradeSetup');

    // Add Short Code
    Route::get('/addShortCode/{schoolCode}', [AddShortCodeController::class, 'add_short_code'])->name('add.short.code');
    Route::put('/addShortCode/{schoolCode}', [AddShortCodeController::class, 'store_add_short_code'])->name('store.short.code');
    Route::delete('/delete_short_code/{id}', [AddShortCodeController::class, 'delete_add_short_code'])->name('delete.short.code');

    // Set Short Code
    Route::get('/setShortCode/{schoolCode}', [SetShortCodeController::class, 'set_short_code'])->name('set.short.code');
    Route::put('/setShortCode/{schoolCode}', [SetShortCodeController::class, 'store_set_short_code'])->name('store.set.short.code');


    // set exam marks
    Route::get('/getExamMarks/{schoolCode}', [SetExamMarksController::class, 'store_exam_marks'])->name('get.exam.marks');
    Route::post('/setExamMarks/{schoolCode}', [SetExamMarksController::class, 'set_exam_marks'])->name('store.set.exam.marks');
    Route::post('/saveSetExamMarks/{schoolCode}',[SetExamMarksController::class,'saveSetExamMarks'])->name('saveSetExamMarks');

    //forth subject

    Route::get('/setForthSubject/{school_code}',[FourthSubjectController::class,'fourthSubject'])->name('set.Forth.Subject');
    Route::post('/addFourthSubject',[FourthSubjectController::class, 'addFourthSubject'])->name('addFourthSubject');
    Route::post('/saveFourthSubject', [FourthSubjectController::class,'saveFourthSubject'])->name('saveFourthSubject');
    Route::get('/viewFourthSubject', [FourthSubjectController::class,'viewFourthSubject'])->name('viewFourthSubject');
    Route::post('/getFourthSubject', [FourthSubjectController::class,'getFourthSubject'])->name('getFourthSubject');
    Route::delete('/deleteFourthSubject/{id}',[FourthSubjectController::class,'deleteFourthSubject'])->name('deleteFourthSubject');



    //Add Report Name
    Route::get('/AddReportName/{schoolCode}', [AddReportNameController::class, 'add_report'])->name('add.report');
    Route::put('/AddReportName/{schoolCode}', [AddReportNameController::class, 'store_add_report'])->name('store.report');
    Route::delete('/delete_report/{id}', [AddReportNameController::class, 'delete_add_report'])->name('delete.report');
    
    
    //Add Signature Name
    Route::get('/AddSignature/{schoolCode}', [AddSignatureController::class, 'AddSignature']);
    Route::put('/AddSignature/{schoolCode}', [AddSignatureController::class, 'store_add_sign'])->name('store.sign');
    Route::delete('/delete_sign/{id}', [AddSignatureController::class, 'delete_add_sign'])->name('delete.sign');
    
    Route::get('/listSignature/{schoolCode}', [AddSignatureController::class, 'listSignature']);
    
    //Add Exam Publish 
    Route::get('/ExamPublish/{schoolCode}', [ExamPublishController::class, 'ExamPublish']);
    Route::post('/addExamPublish/{schoolCode}', [ExamPublishController::class, 'store_add_exam_publish'])->name('store.exampublish');
    Route::delete('/delete_exam/{id}', [ViewExamPublishController::class, 'delete_add_exam'])->name('delete.report');
    Route::get('/ViewExamPublish/{schoolCode}', [ViewExamPublishController::class, 'ViewExamPublish']);

    //Add Grand Final
    Route::get('/GrandFinal/{schoolCode}', [SetGrandFinalController::class, 'GrandFinal'])->name('grandfinal');
    Route::put('/store_grandFinal/{schoolCode}', [SetGrandFinalController::class,'store_grandFinal'])->name('store.grandfinal');
    Route::get('/viewExamMarkSetup/{schoolCode}', [ViewExamMarkSetUpController::class, 'viewExamMarkSetup']);
    
    //sequential wise exam 
    Route::get('/SequentialExam/{schoolCode}', [SequentialWiseExamController::class, 'SequentialExam'])->name('sequentialExam');
    Route::put('/SetExamMarks/{schoolCode}', [SequentialWiseExamController::class, 'store_sequential_exam'])->name('store.sequentialExam');
    //sequential wise exam 
    Route::get('/SetExamMarks', [SetExamMarksController::class, 'SetExamMarks']);
   
    //Set signature
    Route::get('/SetSignature/{schoolCode}', [SetSignatureController::class, 'SetSignature'])->name('view.signature');
    Route::post('/SetSignature/{schoolCode}', [SetSignatureController::class, 'processForm'])->name('store.signature');


    // Exam Setting End .............................................................................................................




    // Exam Setting End .............................................................................................................







    //teacher module start

    Route::get('/add-teacher', [TeacherController::class, 'addTeacher']);
    Route::post('/create-teacher', [TeacherController::class, 'createTeacher'])->name('teacher.create');


    //Admit Card .............................................................................................................
    // Route::get('/addSubjectSetup', [AddSubjectSetupController::class, 'add_subject_setup'])->name('add.subject.setup');
    // Route::put('/addSubjectSetup', [AddSubjectSetupController::class, 'store_add_subject_setup'])->name('store.subject.setup');
    // Route::put('/updateSubjectSetup', [AddSubjectSetupController::class, 'updateSubjectSetup'])->name('update.setSubject');

  
    //Set Admit Card
    Route::group(['prefix' => '/', 'namespace' => 'admitCard'], function () {
        Route::get('/setAdmitCard/{schoolCode}', [AddAdmitCardController::class, "add_admit_card"])->name('add.admit.card');
        Route::put('/setAdmitCard/{schoolCode}', [AddAdmitCardController::class, 'store_add_admit_card'])->name('store.add.admit.card');
        Route::put('/updateAdmitCard/{schoolCode}', [AddAdmitCardController::class, 'update_add_admit_card'])->name('update.add.admit.card');
        // Route::get('/setShortCode', [SetShortCodeController::class, 'set_short_code'])->name('set.short.code');
        // Route::put('/setShortCode', [SetShortCodeController::class, 'store_set_short_code'])->name('store.set.short.code');
    });


    //Print Admit Card
    Route::get('/printAdmitCard/{schoolCode}', [PrintAdmitCardController::class, "printAdmitCard"])->name('printAdmitCard');
    Route::post('/downloadAdmit/{schoolCode}', [PrintAdmitCardController::class, "downloadAdmit"])->name('downloadAdmitCard');
    

    //Print Seat Plan
    Route::get('/printSeatPlan/{schoolCode}', [PrintSeatPlanController::class, "printSeatPlan"]);

    //Print Admit Instuction
    Route::get('/AddAdmitInstruction/{schoolCode}', [AddAdmitInstructionController::class, "AddAdmitInstruction"])->name('addAdmitinstruction');
    Route::post('/instructionInsert/{schoolCode}', [AddAdmitInstructionController::class, 'instructionInsert'])->name('store.instructionInsert');

    //List Admit Instuction
    Route::get('/ListAdminInstruction/{schoolCode}', [ListAdminInstructionController::class, "ListAdminInstruction"])->name('listInstruction');
    Route::delete('/delete_instruction/{id}', [ListAdminInstructionController::class, 'delete_instruction'])->name('delete.instruction');
    //Exam Blank Sheet
    Route::get('/ExamBlankSheet/{schoolCode}', [ExamBlankSheetController::class, "ExamBlankSheet"]);


    // NEDUBD Add School Admin 
    Route::get('/addSchoolAdmin', [SchoolAdminController::class, "addSchoolAdmin"]);
    Route::post('/createSchoolAdmin', [SchoolAdminController::class, "createSchoolAdmin"])->name('schoolAdmin.create');
});
