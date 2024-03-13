<?php

namespace App\Providers;

use App\Models\Student;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\View;
use App\Models\SchoolAdmin;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {

            
            $schoolAdminData=null;
            $studentData=null;
            
            $schoolAdminId=Session::get('schoolAdminId');
            $studentId=Session::get('studentId');
            $school_code=Session::get('school_code');
            if($schoolAdminId){
                $schoolAdminData=SchoolAdmin::find($schoolAdminId);
            }
            else if($studentId)
            $studentData=Student::find($studentId);
          
            $view->with('schoolAdminData',$schoolAdminData)
                 ->with('studentData',$studentData)
                 ->with('school_code',$school_code);

        });
    }
}
