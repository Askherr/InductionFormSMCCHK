<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    protected $maxAttempts = 3; // Default is 5
    protected $decayMinutes = 2; // Default is 1
    public function index(){
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'phone' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'phone' => 'Maaf Nomor atau Password anda Salah!',
        ]);
    }

    public function logout(Request $request){
        
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
