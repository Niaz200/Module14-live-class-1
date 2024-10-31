<?php

use App\Http\Controllers\ProtectedController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/secret', [ProtectedController::class, 'secretMessage'])->name('secret')->middleware('auth');
Route::get('/open', [ProtectedController::class, 'openMessage'])->name('secret');


/*

Route::middleware(['auth'])->group(function (){
    Route::get('/secret', [ProtectedController::class, 'secretMessage'])->name('secret');
    Route::get('/open', [ProtectedController::class, 'openMessage'])->name('secret');
});

*/
