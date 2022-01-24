<?php

use App\Models\User;
use App\Models\Absensi;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PermissionController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotosController;
use App\Models\Permission;

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

Route::resource('dashboard', DashboardController::class);

// Route::get('/dashboard', function () {
//     return view('pages.dashboard.Dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('/dashboard-admin', function () {
    return view('pages.dashboard.Dashboard');
});

require __DIR__ . '/auth.php';

// face-detector route
Route::get('/face', [PhotosController::class, 'index']);
Route::get('/photo', function () {
});
Route::post('/face', [PhotosController::class, 'store']);
Route::get('/attendence', [PhotosController::class, 'show']);
Route::get('/permission', [PermissionController::class, 'index']);


// sidebar class route
Route::get('/class', function (User $user) {
    return view('class', [
        'title' => 'Daftar Kelas',
        'tables' => $user->get()
    ]);
});
Route::get('/attedence', function (Absensi $absen) {
    return view('attedence', [
        'title' => 'Kehadiran',
        'attedence' => $absen->withTrashed()->get()
    ]);
});
Route::get('/permissions', function (Permission $permission) {
    return view('permissions', [
        'title' => 'Izin',
        'permissions' => $permission->get()
    ]);
});
