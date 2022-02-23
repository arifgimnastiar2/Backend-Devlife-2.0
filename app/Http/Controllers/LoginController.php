<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    protected $redirectPath = '/dashboard';
    protected $redirectTo = '/';


    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function index()
    {
        if (Auth::guard('admin')->check()) { // true sekalian session field di users nanti bisa dipanggil via Auth
            //Login Success
            // dd('sudah masuk harusnya');
            return redirect()->route('dashboard');
        }
        return view('auth.login.index');
    }

    public function login(Request $request)
    {

        $credentials = $request->validate([
            'nip' => 'required',
            'password' => 'required'
        ]);

        if (Auth::guard('admin')->attempt($credentials)) { // true sekalian session field di users nanti bisa dipanggil via Auth
            //Login Success
            // dd($credentials);
            $request->session()->regenerate();
            // dd('Berhasil masuk');
            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError', 'Login Gagal!!!'); //login gaggl!

    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
