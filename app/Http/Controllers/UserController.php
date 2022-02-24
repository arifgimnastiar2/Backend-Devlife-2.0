<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Api\ResponseFormatter;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\HasApiTokens;

class UserController extends Controller
{
    //
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nis' => 'required|integer|unique:users',
            // 'kelas_id' => 'required|integer',
            'name' => 'required|string|max:255',
            'jurusan' => 'required|in:Rekayasa Perangkat Lunak 1, Rekayasa Perangkat Lunak 2, Rekayasa Perangkat Lunak 3, Teknik Komputer Jaringan 1, Teknik Komputer Jaringan 2, Multimedia, Audio Video 1, Audio Video 2, Audio Video 3, Audio Video 4, Teknik Instalasi Tenaga Listrik 1, Teknik Instalasi Tenaga Listrik 2, Teknik Otomasi Industri 1, Teknik Otomasi Industri 2',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:4'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $user = User::create([
            'nis' => $request->nis,
            'name' => $request->name,
            // 'kelas_id' => $request->kelas_id,
            'jurusan' => $request->jurusan,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()
            ->json(['data' => $user, 'access_token' => $token, 'token_type' => 'Bearer',]);
    }

    public function login(Request $request)
    {
        if (!Auth::attempt($request->only('nis', 'password'))) {
            return response()
                ->json(['message' => 'Nis and Password Unauthorized'], 401);
        }

        $user = User::where('nis', $request['nis'])->firstOrFail();

        $checkPassword = User::where('password', $request['password']);
        $token = $user->createToken('auth_token')->plainTextToken;

        return ResponseFormatter::success([
            'data' => $user,
            'access_token' => $token,
            'token_type' => 'Bearer',
        ],  'Successfully login into your account!');
    }

    // method for user logout and delete token
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return [
            'message' => 'You have successfully logged out and the token was successfully deleted'
        ];
    }
}
