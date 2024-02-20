<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Registration;
use Illuminate\Support\Facades\Hash;
class AuthController extends Controller
{
    public function index()
    {
        return view("Auth.login");
    }

    
    public function register()
    {
        return view("Auth.register");
    }
    public function store(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email',
            'phone_number' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'address'=>'required|string',
            'password' => 'required|string|min:4',
            'school_code'=>'required|string'
        ]);

        $image = $request->file('image');
        $image = uniqid() . '_' . $image->getClientOriginalName();

        $path = 'assets/images';
        $imagePath = $request->file('image')->move($path, $image);

        $isExist = Registration::where('email', $request->input('email'))
            ->orWhere('phone_number', $request->input('phone_number'))
            ->exists();
        if ($isExist) {
            return back()->withInput()->withErrors(['email or Phone' => 'This email or phone number is already taken.']);
        }


        $admin = new Registration();
        $admin->name = $request->input('name');
        $admin->email = $request->input('email');
        $admin->phone_number = $request->input('phone_number');
        $admin->school_code = $request->input('school_code');
        $admin->image = $image;
        $admin->password = Hash::make($request->input('password'));
        $admin->address = $request->input('address');
        $admin->save();


        return redirect('/login')->with('success', 'Registration successful! Please log in.');
    }
}
