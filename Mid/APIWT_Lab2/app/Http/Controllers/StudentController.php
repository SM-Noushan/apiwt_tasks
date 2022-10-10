<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function dashboard(){
        return view('dashboard');
    }

    public function login_index(){
        return view('auth.login');
    }

    public function register_index(){
        return view('auth.registration');
    }

    public function contact_index(){
        return view('contact');
    }

    public function login_confirm(Request $request){
        $validate = $request->validate([
            "student_id"=>"required|size:10|regex:/^\d{2}-\d{5}-[1-3]{1}$/",
            'password'=>'required|max:32',
        ]);
        $credentials = $request->only('student_id', 'password');
        if (Auth::attempt($credentials)){
            return redirect()->route('dashboard');
        }
        return back()->with('invalid', 'Invalid Credentials');

    }

    public function register_confirm(Request $request){
        $validate = $request->validate([
            "name"=>"required|max:100",
            "sid"=>"required|unique:students,student_id|max:10|min:10|regex:/^\d{2}-\d{5}-[1-3]{1}$/",
            'dob'=>'required',
            'email'=>'email|max:50',
            'phone'=>'required|numeric|regex:/^(01[3-9]\d{8})$/|digits:11',
            'password'=>'required|string|confirmed|max:32|min:8'
        ],
        [
            'sid.required' => 'Student id is required',
            'sid.min' => 'Student id invalid',
            'sid.unique' => 'Student id already exists',
            'sid.regex' => 'Student id format is invalid',

        ]
    );

    $std = new Student();

    $std->name = $request->name;
    $std->student_id = $request->sid;
    $std->dob = $request->dob;
    $std->phone = $request->phone;
    $std->email = $request->email;
    $std->address = $request->address;
    $std->password = Hash::make($request->password);
    $std->save();

        return redirect()->route('login')->with('success', 'Registration Successful');
    }

    public function logout(){
        Session::flush();
        Auth::logout();

        return redirect('/');
    }
}