<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UserController;

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
    return view('auth\login');
});

Route::get('/dashboard', function () {
    return view('dashboard/index');
})->middleware(['auth', 'verified'])->name('dashboard');

/* NewsRoute */
Route::prefix('news')->group(function () {
    Route::get('/', [NewsController::class, 'index'])->middleware(['auth', 'verified'])->name('news');
    Route::get('/dataTable', [NewsController::class, 'dataTable']);
    Route::post('/store', [NewsController::class, 'store']);
});

/* UserRoute */
Route::prefix('user')->group(function () {
    Route::get('/', [UserController::class, 'index'])->middleware(['auth', 'verified'])->name('user');
    Route::get('/dataTable', [UserController::class, 'dataTable']);
    Route::post('/store', [UserController::class, 'store']);
});

require __DIR__.'/auth.php';
