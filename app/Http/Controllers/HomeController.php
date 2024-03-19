<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    function  blank_page()
    {
        return view('admin.blank');
    }
    public function loginPage()
    {
        return view('login');
    }
    public function registerPage()
    {
        return view('register');
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
    public function postlogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            // Authentication successful
            // dd(Auth::user());
            return redirect()->intended('/'); // Redirect to the intended URL or a default
            if (Auth::user()->sataus) {
                return redirect()->intended('/'); // Redirect to the intended URL or a default
            } else {
                return redirect()->route('login')->with('error', 'Your Account is deactivated please contact support!');
            }
        }
        // Authentication failed
        return redirect()->route('login')->with('error', 'Wrong Username Or Password');
    }
}
