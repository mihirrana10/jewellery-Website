<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        // dd($credentials);
 
        if (Auth::guard('user')->attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/');
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
        
        User::create([
            'first_name'=>$credentials['fname'],
            'last_name'=>$credentials['lname'],
            'email'=>$credentials['email'],
            'password'=>Hash::make($credentials['password']),



        ]);
    }

    // public function logout(Request $request){
    //     Auth::logout();
        
    //     $request->session()->invalidate();
    //     $request->session()->regenerateToken();
    //     // dd('hello');
    //     return \redirect()->to("/login");
    //     }

        public function login(){
            // dd(Auth::check());
            // if(Auth::guard('user') && Auth::check()){
            // return \redirect()->to('/');
            // }
            // // dd('hello');

            return view('pages.login');
        }
    
}
