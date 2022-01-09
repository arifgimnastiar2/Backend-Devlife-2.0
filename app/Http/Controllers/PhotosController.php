<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Absensi;
use Illuminate\Support\Facades\Validator;

class PhotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
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
            'nis' => 'required',
            'long' => 'required',
            'lat' => 'required',
            'base64' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $photo = Absensi::create([
            'nis' => $request->nis,
            'long' => $request->long,
            'lat' => $request->lat,
            'base64' => $request->base64
        ]);

        $token = $photo->createToken('auth_token')->plainTextToken;

        return response()
            ->json(['data' => $photo, 'access_token' => $token, 'token_type' => 'Bearer',]);
    }
}
