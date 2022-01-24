<?php

use App\Http\Controllers\Api\AttendanceController;
use App\Http\Controllers\Api\MatpelController;
use App\Http\Controllers\Api\PermissionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PhotosController;

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
Route::post('/attendence', [AttendanceController::class, 'store']);

// API route for Permission
Route::get('/permission', [PermissionController::class, 'index']);
