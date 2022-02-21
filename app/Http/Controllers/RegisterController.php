<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register.index', []);
    }

    public function store(Request $request)
    {
        $validatedData = Validator::make($request->all(), [
            'nip' => 'required|integer|unique:guru',
            'nama_guru' => 'required|max:255',
            'kompetensi_keahlian' => 'required',
            'email' => 'required|email|unique:guru',
            'password' => 'required|min:6|max:255'
        ]);

        if ($validatedData->fails()) {
            return response()->json($validatedData->errors());
        }
        // dd($validatedData);

        $guru = Guru::create([
            'nip' => $request->nip,
            'nama_guru' => $request->nama_guru,
            'kompetensi_keahlian' => $request->kompetensi_keahlian,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect('/login')->with('success', 'Buat akun berhasil! Silahkan Masuk');
    }
}
