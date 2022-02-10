<?php

namespace App\Http\Controllers;

use App\Guru;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Api\ResponseFormatter;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login.index');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'nip' => 'required|integer',
            'password' => 'required'
        ]);
        
        
        if (Auth::guard('web')->attempt($credentials)) {
            // Authentication was successful...
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }
 
        return back()->with('loginError', 'Login Gagal!!!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
