<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        // dd($credentials);

        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin/dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function signup(Request $request)
    {
        $credentials = $request->validate([
            'fname'=>['required'],
            'lname'=>['required'],
            'email' => ['required', 'email'],
            'password' => ['required'],

        ]);

        Admin::create([
            'first_name'=>$credentials['fname'],
            'last_name'=>$credentials['lname'],
            'email'=>$credentials['email'],
            'password'=>Hash::make($credentials['password']),



        ]);
    }



    public function login(){
        // dd(Auth::check());
        // $this->middleware('guest:user');
        if(Auth::guard('admin')->check()){
             return \redirect('/admin/dashboard');
        }
        // // dd('hello');

        return view('admin.login');
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return \redirect()->to("/admin/login");
    }
}
