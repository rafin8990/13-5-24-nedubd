<?php

namespace App\Http\Controllers\Backend\StudentAccounts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuickCollectionController extends Controller
{
    public function QuickCollectionView(Request $request){
        return view("Backend.StudentAccounts.QuickCollection");
    }
}
