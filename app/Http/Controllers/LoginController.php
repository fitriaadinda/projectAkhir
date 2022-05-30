<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function viewLogin() {
        if(Auth::check()){
            return redirect('/admin');
        }

        return view('auth/login');
    }

    public function prosesLogin(Request $request) {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/admin')->with('success_message', 'Anda Berhasil login');
        }

        return redirect()->back()->with('error_message', 'Anda gagal login');
    }

    public function logout(Request $request) {
        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/');
    }
}
