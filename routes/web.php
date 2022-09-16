<?php

use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('homepage');
// });


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\Frontend\FrontendController::class, 'index']);
Route::get('/about', [App\Http\Controllers\Frontend\FrontendController::class, 'about']);
Route::get('/contact', [App\Http\Controllers\Frontend\FrontendController::class, 'contact']);
Route::get('/service', [App\Http\Controllers\Frontend\FrontendController::class, 'service']);
Route::get('/why', [App\Http\Controllers\Frontend\FrontendController::class, 'why']);

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    //dashboard
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
    //kategori
    Route::controller(App\Http\Controllers\Admin\KategoriController::class)->group(function () {
        Route::get('/kategori', 'index');
        Route::get('/kategori/create', 'create');
        Route::post('/kategori', 'store');
        Route::get('/kategori/{kategori}/edit', 'edit');
        Route::put('/kategori/{kategori}', 'update');
        Route::get('/kategori/{kategori}', 'destroy');
    });
    Route::controller(App\Http\Controllers\Admin\KendaraanController::class)->group(function () {
        Route::get('/kendaraan', 'index');
        Route::get('/kendaraan/create', 'create');
        Route::post('/kendaraan', 'store');
        Route::get('/kendaraan/{kendaraan}/edit', 'edit');
        Route::put('/kendaraan/{kendaraan}', 'update');
        Route::get('/kendaraan/{kendaraan}', 'destroy');
    });

    Route::controller(App\Http\Controllers\Admin\SukuCadangController::class)->group(function (){
        Route::get('/suku-cadang', 'index')
;    });
});
