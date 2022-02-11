<?php

namespace App\Http\Controllers;

use App\Guru;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Api\ResponseFormatter;

class LoginController extends Controller
{

    protected $redirectTo = '/dashboard';   
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index()
    {
        return view('auth.login.index');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'nip' => 'required',
            'password' => 'required',
        ]);
        
        if (Auth::guard('admins')->attempt($credentials)) {
            // Authentication was successful...
            // dd('harusnya ini masuk ke dashboard');
            return redirect()->intended(route('dashboard'));
        }
        return back()->with('loginError', 'Login Gagal!!!');
    }

    public function logout(Request $request)
    {
        Auth::guard('admins')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
