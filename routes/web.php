<?php

use App\Http\Controllers\Backend\Dashboard\DashboardController;
use App\Http\Controllers\Backend\Student\StudentController;
use App\Http\Controllers\Backend\Teacher\TeacherController;
use App\Http\Controllers\Frontend\Auth\AuthController;
use App\Http\Controllers\Backend\ExamResult\ExamResultController;
use App\Http\Controllers\Backend\GrandFinal\GrandFinalController;
use App\Http\Controllers\Backend\ReportsExamsReports\ReportsExamsReportsController;
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
Route::get('/login', [AuthController::class,'index'])->name('login');
//Route::get('/login-user', [AuthController::class, 'loginUser'])->name('login-user');
Route::get('/register', [AuthController::class,'register'])->name('register');
Route::post('/register/admin', [AuthController::class, 'store'])->name('users.store');

Route::prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');

    
    // student module
    Route::get('/add-student', [StudentController::class,'AddStudentForm'])->name('AddStudentForm');
    

    
     // exam-Result 
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

    //Basic setting
    Route::get('/session',function(){
        return view ('Backend/BasicInfo/CommonSetting/addAcademicSession');
    });
    Route::get('/year',function(){
        return view ('Backend/BasicInfo/CommonSetting/addAcademicYear');
    });
    Route::get('/board',function(){
        return view ('Backend/BasicInfo/CommonSetting/addBoardExam');
    });
    Route::get('/category',function(){
        return view ('Backend/BasicInfo/CommonSetting/addCategory');
    });
    Route::get('/class',function(){
        return view ('Backend/BasicInfo/CommonSetting/addClass');
    });
    Route::get('/classExam',function(){
        return view ('Backend/BasicInfo/CommonSetting/addClassExam');
    });
    Route::get('/group',function(){
        return view ('Backend/BasicInfo/CommonSetting/addClassWiseGroup');
    });
    Route::get('/section',function(){
        return view ('Backend/BasicInfo/CommonSetting/addClassWiseSection');
    });
    Route::get('/shift',function(){
        return view ('Backend/BasicInfo/CommonSetting/addClassWiseShift');
    });
    Route::get('/addGroup',function(){
        return view ('Backend/BasicInfo/CommonSetting/addGroup');
    });
    Route::get('/addPeriod',function(){
        return view ('Backend/BasicInfo/CommonSetting/addPeriod');
    });
    Route::get('/addSection',function(){
        return view ('Backend/BasicInfo/CommonSetting/addSection');
    });
    Route::get('/addShift',function(){
        return view ('Backend/BasicInfo/CommonSetting/addShift');
    });
    Route::get('/addSubject',function(){
        return view ('Backend/BasicInfo/CommonSetting/addSubject');
    });
});
