<?php
namespace App\Http\Controllers;

// use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\PostUser;
use Illuminate\Support\Facades\DB;

class LoginAdminController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('guest:admin',['except'=>'logout']);
    // }
    // Login etc
    public function formLogin()
    {
        return view('loginAdmin');
    }

    public function loginAdmin(Request $request)
    {
        $credentials = $request->validate([
            'email'=>'required|email|exists:admins',
            'password'=>'required'
        ]);

        if (Auth::guard('admin')->attempt($credentials, $request->remember)) {
            $request->session()->regenerate();
            return redirect()->intended(config('admin.prefix'));
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }


}
