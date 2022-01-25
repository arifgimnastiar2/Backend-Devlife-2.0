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
            'name' => 'required|string|max:255',
            'jurusan' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:4'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $user = User::create([
            'nis' => $request->nis,
            'name' => $request->name,
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
        // return response()->json(['message' => 'Password or username invalid']);

        return ResponseFormatter::success($user, $token,  'Successfully login into your account!');
        // if ($checkPassword) {
        //     ResponseFormatter::success($token, 'Successfully login into your account!');
        // } else {
        // }
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
