<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//customized
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CustomAuthController extends Controller
{
    // //__construct
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index(){
        if(Auth::check()){
            return redirect()->route('dashboard');
        }
        return view('auth.login');
    }
    public function index_admin(){
        return view('admin.adminlogin');
    }


    public function customLogin(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)){
            $request->session()->put('status', Auth::user()->status);
            
            if($request->session()->get('status') !== 'admin')
                return redirect()->intended('dashboard')
                ->withSuccess('Signed in');
            
            return redirect()->route('dashboard_admin');
            
        }

        return back()->withErrors(['InvalidLoginInfo'=>'Invalid Email or Password']);
    }

    public function registration(){
        if(Auth::check()){
            return redirect()->route('dashboard');
        }
        return view('auth.registration');
    }

    public function customRegistration(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed', 
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect('signin')->with('message', 'Registration Successful');
    }

    public function create(array $data){
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }

    public function dashboard(){
        if(Auth::check()){
            //$todos = DB::table('todos')->where('by_uid', Auth::user()->id)->orderBy('id')->get();
            return view('auth.dashboard');
        }

        return redirect()->route('login')->withErrors(['NotLogged'=>'Login first']);
    }

    public function dashboard_admin(){
        if(Auth::check()){
            $users = User::all();
            //$todos = DB::table('todos')->where('by_uid', Auth::user()->id)->orderBy('id')->get();
            return view('admin.admindashboard')->with('users', $users);
        }

        return redirect()->route('login')->withErrors(['NotLogged'=>'Login first']);
    }

    public function signOut(){
        Session::flush();
        Auth::logout();

        return redirect('/');
    }
}
