<?php

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
use App\Http\Controllers\Backend\Teacher\TeacherController;
use App\Http\Controllers\Frontend\Auth\AuthController;
use App\Http\Controllers\Backend\ExamResult\ExamResultController;

use App\Http\Controllers\Backend\ExamSetting\AddGradePointController;
use App\Http\Controllers\Backend\ExamSetting\AddShortCodeController;
use App\Http\Controllers\Backend\ExamSetting\GradeSetupController;
use App\Http\Controllers\Backend\ExamSetting\SetShortCodeController;
use App\Http\Controllers\Backend\ExamSetting\AddReportNameController;
use App\Http\Controllers\Backend\ExamSetting\AddSignatureController;
use App\Http\Controllers\Backend\ExamSetting\ExamPublishController;
use App\Http\Controllers\Backend\ExamSetting\SetGrandFinalController;
use App\Http\Controllers\Backend\ExamSetting\SequentialWiseExamController;
use App\Http\Controllers\Backend\ExamSetting\SetExamMarksController;
use App\Http\Controllers\Backend\ExamSetting\SetSignatureController;
use App\Http\Controllers\Backend\ExamSetting\ViewExamPublishController;

use App\Http\Controllers\Backend\GrandFinal\GrandFinalController;
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
Route::get('/login-user', [AuthController::class, 'loginUser'])->name('login-user');



Route::prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
    // NEDUBD Module 
    Route::get('/addAdmin', [NEDUBDController::class, 'addAdmin']);
    Route::post('/create-admin', [NEDUBDController::class, 'createAdmin'])->name('admin.add');
    Route::get('/addSchoolInfo', [NEDUBDController::class, 'addSchoolInfo']);
    Route::post('/create-schoolInfo', [NEDUBDController::class, 'createSchoolInfo'])->name('schoolInfo.add');



    // student module
    Route::post('/create-student', [StudentController::class, 'addStudent'])->name('student.add');
    Route::get('/add-student', [StudentController::class, 'AddStudentForm'])->name('AddStudentForm');
    Route::get('/updateStudentBasicInfo', [StudentController::class, 'updateStudentBasicInfo'])->name('updateStudentBasicInfo');
    Route::get('/studentProfileUpdate', [StudentController::class, 'studentProfileUpdate'])->name('studentProfileUpdate');
    Route::get('/uploadExelFile', [StudentController::class, 'uploadExelFile'])->name('uploadExelFile');
    Route::get('/uploadStudentPhoto', [StudentController::class, 'uploadStudentPhoto'])->name('uploadStudentPhoto');










    // exam-Result -------------------- Mostafizur ------------------
    Route::get('/exam_marks', [ExamResultController::class, 'exam_marks']);
    Route::get('/exam_process', [ExamResultController::class, 'exam_process']);
    Route::get('/exam_excel', [ExamResultController::class, 'exam_excel']);
    Route::get('/exam_marks_delete', [ExamResultController::class, 'exam_marks_delete']);
    Route::get('/exam_sms', [ExamResultController::class, 'exam_sms']);





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
    Route::get('/grand_exam_setup', [GrandFinalController::class, 'setupGrand']);


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
    Route::get('/addClass', [AddClassController::class, 'add_class'])->name('add.class');
    Route::put('/addClass', [AddClassController::class, 'update_add_class'])->name('update.class');
    Route::delete('/delete_class/{id}', [AddClassController::class, 'delete_add_class'])->name('delete.class');

    // Add Section
    Route::get('/addSection', [AddSectionController::class, 'add_section'])->name('add.section');
    Route::put('/addSection', [AddSectionController::class, 'update_add_section'])->name('update.section');
    Route::delete('/delete_section/{id}', [AddSectionController::class, 'delete_add_section'])->name('delete.section');

    // Add Shift
    Route::get('/addShift', [AddShiftController::class, 'add_shift'])->name('add.shift');
    Route::put('/addShift', [AddShiftController::class, 'update_add_shift'])->name('update.shift');
    Route::delete('/delete_shift/{id}', [AddShiftController::class, 'delete_add_shift'])->name('delete.shift');

    // Add Group
    Route::get('/addGroup', [AddGroupController::class, 'add_group'])->name('add.group');
    Route::put('/addGroup', [AddGroupController::class, 'update_add_group'])->name('update.group');
    Route::delete('/delete_group/{id}', [AddGroupController::class, 'delete_add_group'])->name('delete.group');

    // Add Subject
    Route::get('/addSubject', [AddSubjectController::class, 'add_subject'])->name('add.subject');
    Route::put('/addSubject', [AddSubjectController::class, 'update_add_subject'])->name('update.subject');
    Route::delete('/delete_subject/{id}', [AddSubjectController::class, 'delete_add_subject'])->name('delete.subject');


    // Add academic session
    Route::get('/addAcademicSession', [AddAcademicSessionController::class, 'add_academic_session'])->name('add.academic.session');
    Route::put('/addAcademicSession', [AddAcademicSessionController::class, 'update_add_academic_session'])->name('update.academic.session');
    Route::delete('/delete_academic_session/{id}', [AddAcademicSessionController::class, 'delete_add_academic_session'])->name('delete.academic.session');

    // Add academic year
    Route::get('/addAcademicYear', [AddAcademicYearController::class, 'add_academic_year'])->name('add.academic.year');
    Route::put('/addAcademicYear', [AddAcademicYearController::class, 'update_add_academic_year'])->name('update.academic.year');
    Route::delete('/delete_academic_Year/{id}', [AddAcademicYearController::class, 'delete_add_academic_year'])->name('delete.academic.year');

    // Add board exam
    Route::get('/addBoardExam', [AddBoardExamController::class, 'add_board_exam'])->name('add.board.exam');
    Route::put('/addBoardExam', [AddBoardExamController::class, 'update_add_board_exam'])->name('update.board.exam');
    Route::delete('/delete_board_exam/{id}', [AddBoardExamController::class, 'delete_add_board_exam'])->name('delete.board.exam');

    // Add category
    Route::get('/addCategory', [AddCategoryController::class, 'add_category'])->name('add.category');
    Route::put('/addCategory', [AddCategoryController::class, 'update_add_category'])->name('update.category');
    Route::delete('/delete_category/{id}', [AddCategoryController::class, 'delete_add_category'])->name('delete.category');

    // Add board exam
    Route::get('/addClassExam', [AddClassExamController::class, 'add_class_exam'])->name('add.class.exam');
    Route::put('/addClassExam', [AddClassExamController::class, 'update_add_class_exam'])->name('update.class.exam');
    Route::delete('/delete_class_exam/{id}', [AddClassExamController::class, 'delete_add_class_exam'])->name('delete.class.exam');

    // Add class wise group
    Route::get('/addClassWiseGroup', [AddClassWiseGroupController::class, 'add_class_wise_group'])->name('add.class.wise.group');
    Route::post('/addClassWiseGroup', [AddClassWiseGroupController::class, 'update_add_class_wise_group'])->name('add.class.wise.group');
    Route::delete('/delete_class_wise_group/{id}', [AddClassWiseGroupController::class, 'delete_add_class_wise_group'])->name('delete.class.wise.group');

    // Add class wise section
    Route::get('/addClassWiseSection', [AddClassWiseSectionController::class, 'add_class_wise_section'])->name('add.class.wise.section');
    Route::post('/addClassWiseSection', [AddClassWiseSectionController::class, 'update_add_class_wise_section'])->name('add.class.wise.section');
    Route::delete('/delete_class_wise_section/{id}', [AddClassWiseSectionController::class, 'delete_add_class_wise_section'])->name('delete.class.wise.section');

    // Add class wise shift
    Route::get('/addClassWiseShift', [AddClassWiseShiftController::class, 'add_class_wise_shift'])->name('add.class.wise.shift');
    Route::post('/addClassWiseShift', [AddClassWiseShiftController::class, 'update_add_class_wise_shift'])->name('add.class.wise.shift');
    Route::delete('/delete_class_wise_shift/{id}', [AddClassWiseShiftController::class, 'delete_add_class_wise_shift'])->name('delete.class.wise.shift');

    // Add category
    Route::get('/addPeriod', [AddPeriodController::class, 'add_period'])->name('add.period');
    Route::put('/addPeriod', [AddPeriodController::class, 'update_add_period'])->name('update.period');
    Route::delete('/delete_period/{id}', [AddPeriodController::class, 'delete_add_period'])->name('delete.period');

    // Add Institute Info
    Route::get('/addInstituteInfo', [InstituteInfoController::class, 'add_institute_info'])->name('add.institute.info');
    Route::put('/addInstituteInfo', [InstituteInfoController::class, 'update_add_institute_info'])->name('update.institute.info');


    // Add Subject Setup
    Route::get('/addSubjectSetup', [AddSubjectSetupController::class, 'add_subject_setup'])->name('add.subject.setup');
    Route::put('/addSubjectSetup', [AddSubjectSetupController::class, 'update_add_subject_setup'])->name('update.subject.setup');
    // Route::post('/newSubjectSetup', [AddSubjectSetupController::class, 'new_add_subject_setup'])->name('new.subject.setup');
    // Route::delete('/delete_subject_setup/{id}', [AddSubjectSetupController::class, 'delete_add_subject_setup'])->name('delete.subject.setup');

    // Common Setting End .............................................................................................................



    // Exam Setting Start .............................................................................................................

    // Add Grade Point
    Route::get('/addGradePoint', [AddGradePointController::class, 'add_grade_point'])->name('add.grade.point');
    Route::put('/addGradePoint', [AddGradePointController::class, 'update_add_grade_point'])->name('update.grade.point');
    Route::delete('/delete_grade_point/{id}', [AddGradePointController::class, 'delete_add_grade_point'])->name('delete.grade.point');

    // Grade Setup
    Route::get('/setGradeSetup', [GradeSetupController::class, 'grade_setup'])->name('set.grade.setup');
    Route::put('/setGradeSetup', [GradeSetupController::class, 'update_set_grade_setup'])->name('update.set.grade.setup');
    Route::delete('/delete_set_grade_setup/{id}', [GradeSetupController::class, 'delete_set_grade_setup'])->name('delete.set.grade.setup');

    // Add Short Code
    Route::get('/addShortCode', [AddShortCodeController::class, 'add_short_code'])->name('add.short.code');
    Route::put('/addShortCode', [AddShortCodeController::class, 'update_add_short_code'])->name('update.short.code');
    Route::delete('/delete_short_code/{id}', [AddShortCodeController::class, 'delete_add_short_code'])->name('delete.short.code');

    // Set Short Code
    Route::get('/setShortCode', [SetShortCodeController::class, 'set_short_code'])->name('set.short.code');
    Route::put('/setShortCode', [SetShortCodeController::class, 'update_set_short_code'])->name('update.set.short.code');


    //forth subject
    Route::get('/setForthSubject',[FourthSubjectController::class,'fourthSubject'])->name('set.Forth.Subject');
    Route::post('/addFourthSubject',[FourthSubjectController::class, 'addFourthSubject'])->name('addFourthSubject');

    //Add Report Name
    Route::get('/AddReportName',[AddReportNameController::class,'AddReportName']);

    //Add Signature Name
    Route::get('/AddSignature',[AddSignatureController::class,'AddSignature']);

    //Add Exam Publish 
    Route::get('/ExamPublish',[ExamPublishController::class,'ExamPublish']);
    Route::get('/ViewExamPublish',[ViewExamPublishController::class,'ViewExamPublish']);

    //Add Grand Final
    Route::get('/GrandFinal',[SetGrandFinalController::class,'GrandFinal']);

    //sequential wise exam 
    Route::get('/SequentialExam',[SequentialWiseExamController::class,'SequentialExam']);

    //sequential wise exam 
    Route::get('/SetExamMarks',[SetExamMarksController::class,'SetExamMarks']);

    //Set signature
    Route::get('/SetSignature',[SetSignatureController::class,'SetSignature']);




    // Exam Setting End .............................................................................................................







    //teacher module start

    Route::get('/add-teacher', [TeacherController::class, 'addTeacher']);
    Route::post('/create-teacher', [TeacherController::class, 'createTeacher'])->name('teacher.create');


    //Admit Card .............................................................................................................
    //Set Admit Card
    Route::get('/setAdmitCard', [SetAdmitCardController::class, "setAdmitCard"]);

    //Print Admit Card
    Route::get('/printAdmitCard',[PrintAdmitCardController::class,"printAdmitCard"]);

    //Print Seat Plan
    Route::get('/printSeatPlan',[PrintSeatPlanController::class,"printSeatPlan"]);

    //Print Admit Instuction
    Route::get('/AddAdmitInstruction',[AddAdmitInstructionController::class,"AddAdmitInstruction"]);

    //List Admit Instuction
    Route::get('/ListAdminInstruction',[ListAdminInstructionController::class,"ListAdminInstruction"]);

    //Exam Blank Sheet
    Route::get('/ExamBlankSheet',[ExamBlankSheetController::class,"ExamBlankSheet"]);


    // NEDUBD Add School Admin 
    Route::get('/addSchoolAdmin', [SchoolAdminController::class, "addSchoolAdmin"]);
    Route::post('/createSchoolAdmin', [SchoolAdminController::class, "createSchoolAdmin"])->name('schoolAdmin.create');
});


