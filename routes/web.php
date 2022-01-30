<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Api\GuruController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\PermissionController;
use Illuminate\Support\Facades\Route;

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
    Route::get('/', [KelasController::class, 'index'])->name('kelas');
    Route::get('/detail', [KelasController::class, 'show']);
    Route::get('/detail/siswa/{nama}', [KelasController::class, 'detailSiswa']);
});


//---------------------- Permission Route
Route::get('/permission', [PermissionController::class, 'index'])->name('permission');
Route::get('/detail', [PermissionController::class, 'show']);


//---------------------- Attendance Route
Route::get('/attendance', [AttendanceController::class, 'index'])->name('attendance');
