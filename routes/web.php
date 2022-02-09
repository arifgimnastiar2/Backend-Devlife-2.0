<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\Api\GuruController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\PermissionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/dashboard');
})->name('home');

require __DIR__ . '/auth.php';

//---------------------- Dashboard Route
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');


//---------------------- Kelas Route
Route::prefix('kelas')->group(function () {
    Route::get('/', [JurusanController::class, 'index'])->name('kelas');
    Route::get('/detail/{jurusan:slug}', [JurusanController::class, 'show']);
    Route::get('/detail/siswa/{kelas:nama}', [KelasController::class, 'show']);
});


//---------------------- Permission Route
Route::get('/permission', [PermissionController::class, 'index'])->name('permission');
Route::get('/detail', [PermissionController::class, 'show']);


//---------------------- Attendance Route
Route::get('/attendance', [AttendanceController::class, 'index'])->name('attendance');


//---------------------- Login Route
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);

//---------------------- Register Route
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);