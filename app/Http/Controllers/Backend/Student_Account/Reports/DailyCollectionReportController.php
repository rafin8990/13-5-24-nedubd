<?php

namespace App\Http\Controllers\Backend\Student_Account\Reports;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DailyCollectionReportController extends Controller
{
    
    public function DailyCollectionReport(){
        return view ('Backend/Student_accounts/Reports(Students_Fees)/dailyCollectionReport');
     }
}
