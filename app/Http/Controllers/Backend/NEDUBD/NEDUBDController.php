<?php

namespace App\Http\Controllers\Backend\NEDUBD;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\SchoolInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class NEDUBDController extends Controller
{
    public function addAdmin()
    {
        $admins=Admin::all();

        return view("Backend.NEDUBD.addAdmin");
    }

    public function createAdmin(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'email' => 'required|string',
            'role' => 'required|string',
            'password' => 'required|string|min:4',
            'repeat_password' => 'required|string|min:4',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->move('images/Admin', $request->input('role') . '_' . uniqid() . '.' . $request->file('image')->extension());
            $AdminImage = 'images/admin/' . basename($imagePath);

            if ($request->input('password') !== $request->input('repeat_password')) {
                return back()->with('error', 'Password did not match');
            }
            $isExist = Admin::where('email', $request->input('email'))
                ->exists();
            if ($isExist) {
                return back()->with('error', 'Failed. This Admin already exists');
            }
            $Admin = new Admin();
            $Admin->first_name = $request->input('first_name');
            $Admin->last_name = $request->input('last_name');
            $Admin->image = $AdminImage;
            $Admin->email = $request->input('email');
            $Admin->password = Hash::make($request->input('password'));
            $Admin->role = $request->input('role');
            $Admin->save();
            return redirect('/dashboard/addAdmin')->with('success', 'Admin Sucessfully  created.');


        }
    }

    public function addSchoolInfo()
    {
        $latestSchoolInfo = SchoolInfo::latest()->first();

        $schoolInfo=SchoolInfo::all();
        $school_code = null;
        $getSchoolCode = $latestSchoolInfo->school_code;
        if ($getSchoolCode) {
            $school_code = (int) $getSchoolCode + 1;
        }
        else{
            $school_code = 1;
        }
        return view('Backend.NEDUBD.addSchoolInfo', compact('school_code'), ['schoolInfo'=>$schoolInfo]);
    }


    public function createSchoolInfo(Request $request)
    {
        $this->validate($request, [
            'school_email' => 'required|string',
            'school_name' => 'required|string',
            'school_phone' => 'required|string',
            'mobile_number' => 'required|string',
            'address' => 'required|string',
            'eiin' => 'required|string',
            'website' => 'required|string',
            'school_code' => 'required|string',
        ]);

        $SchoolInfo = new SchoolInfo();
        $SchoolInfo->school_email = $request->input('school_email');
        $SchoolInfo->school_name = $request->input('school_name');
        $SchoolInfo->school_phone = $request->input('school_phone');
        $SchoolInfo->mobile_number = $request->input('mobile_number');
        $SchoolInfo->address = $request->input('address');
        $SchoolInfo->eiin = $request->input('eiin');
        $SchoolInfo->website = $request->input('website');
        $SchoolInfo->school_code = $request->input('school_code');
        $SchoolInfo->save();
        return redirect('/dashboard/addSchoolInfo')->with('success', 'SchoolInfo Sucessfully  Added.');
    }
}
