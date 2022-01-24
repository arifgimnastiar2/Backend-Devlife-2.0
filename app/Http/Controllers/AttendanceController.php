<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Absensi;

class AttendanceController extends Controller
{
    public function index()
    {
        $items = Absensi::with('user')->get();
        return view('pages.attendance.index', [
            'title' => 'Data Kehadiran Siswa',
            'data' => $items
        ]);
    }

    public function store(Request $request)
    {
    }

    public function show()
    {
    }
}
