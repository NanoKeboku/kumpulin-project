<?php

use App\Http\Controllers\HomepageController;
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

Route::get('/home', [HomepageController::class, 'index'])->name('home');
Route::get('/jelajah', [HomepageController::class, 'jelajah'])->name('jelajah');
Route::get('/detil', [HomepageController::class, 'detail'])->name('detail');
