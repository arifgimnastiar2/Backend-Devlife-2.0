<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotosController;

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
    redirect('/dashboard');
})->name('home');

Route::get('/dashboard', function () {
    return view('pages.dashboard.Dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/dashboard-admin', function () {
    return view('pages.dashboard.Dashboard');
});

require __DIR__ . '/auth.php';

// face-detector route
Route::get('/face', [PhotosController::class, 'index']);
Route::get('/photo', function () {
    $convert = DB::select('select base64 from photos');
    return view('photo', ['convert' => $convert]);
});
Route::post('/face', [PhotosController::class, 'store']);
