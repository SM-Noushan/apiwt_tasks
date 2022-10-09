<?php

use App\Http\Controllers\StudentController;
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

Route::get('/', [StudentController::class, 'index'])->name('/');
Route::get('/dashboard', [StudentController::class, 'dashboard'])->name('dashboard');


Route::get('/login', [StudentController::class, 'login_index'])->name('login');
Route::get('/registration', [StudentController::class, 'register_index'])->name('register');
Route::get('/contact', [StudentController::class, 'contact_index'])->name('contact');


Route::post('/confirm_registration', [StudentController::class, 'register_confirm'])->name('register.submit');
Route::post('/dashboard', [StudentController::class, 'login_confirm'])->name('login.attempt');
Route::get('/logout', [StudentController::class, 'logout'])->name('logout');
