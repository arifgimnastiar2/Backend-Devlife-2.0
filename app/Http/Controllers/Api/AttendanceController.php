<?php

namespace App\Http\Controllers\Api;

use App\Models\Absensi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Absensi::with('user')->get();
        // dd($items);
        // return response()->json($items);
        return ResponseFormatter::success($items, 'auth_token', 'Successfully get data');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_nis' => 'required',
            'lokasi' => 'required|string',
            'base64' => 'required',
            'jam_masuk' => 'required|string|max:10',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $photo = Absensi::create([
            'user_nis' => $request->user_nis,
            'lokasi' => $request->lokasi,
            'base64' => $request->base64,
            'jam_masuk' => $request->jam_masuk,
        ]);

        $token = $photo->createToken('auth_token')->plainTextToken;
        return ResponseFormatter::success($photo, 'Successfully get data attendance!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function show(Absensi $absensi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Absensi $absensi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Absensi $absensi)
    {
        //
    }
}
