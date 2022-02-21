<?php

use App\Http\Controllers\Api\AttendanceController;
use App\Http\Controllers\Api\GuruController;
use App\Http\Controllers\Api\MatpelController;
use App\Http\Controllers\Api\PermissionController;
use App\Http\Controllers\KelasController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//API route for register new user
Route::post('/register', [UserController::class, 'register']);
//API route for login user
Route::post('/login', [UserController::class, 'login']);

//Protecting Routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/profile', function (Request $request) {
        return auth()->user();
    });

    // API route for logout user
    Route::post('/logout', [UserController::class, 'logout']);
});

Route::prefix('matpel')->group(function () {
    Route::get('/', [MatpelController::class, 'getData']);
});

// API route for Face Detector
Route::get('/attendence', [AttendanceController::class, 'index']);
Route::get('/attendence/{nis}', [AttendanceController::class, 'selectedItem']);
Route::post('/attendence', [AttendanceController::class, 'store']);
Route::patch('/attendence/{nis}/{created_at}/{current_time}', [AttendanceController::class, 'update']);

// API route for Permission
Route::get('/permission', [PermissionController::class, 'index']);
Route::post('/permission', [PermissionController::class, 'store']);

// Api route for guru
Route::get('/guru', [GuruController::class, 'index']);

// Api route for kelas
Route::get('/kelas', [KelasController::class, 'index']);
