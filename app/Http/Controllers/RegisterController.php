<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;


class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register.index', [

        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nip' => 'required',
            'nama_guru' => 'required|max:255',
            'kompetensi_keahlian' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6|max:255'
        ]);

        Guru::create([$validatedData]);
    }
}
