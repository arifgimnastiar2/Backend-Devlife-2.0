<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function index()
    {
        $items = Jurusan::with('kelas')->get();
        return view('pages.kelas.jurusan.index', [
            'data' => $items
        ]);
    }

    public function show(Jurusan $jurusan)
    {
        $items = $jurusan->kelas;
        return view('pages.kelas.index', [
            'data' => $items
        ]);
    }
}
