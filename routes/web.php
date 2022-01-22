<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\LoginController;

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
    return view('/auth/login');
});
Route::resource('student', StudentsController::class);
Route::get('/auth/login', [LoginController::class, 'login'])->name('auth.login');
Route::get('/auth/register', [LoginController::class, 'register'])->name('auth.register');
Route::post('/auth/save', [LoginController::class, 'save'])->name('auth.save');
Route::post('/auth/check', [LoginController::class, 'check'])->name('auth.check');
Route::get('/auth/logout', [LoginController::class, 'logout'])->name('toka');
Route::fallback('LoginController@login444');
