<?php

use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\MedController;
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

Route::get('/', [CustomAuthController::class, 'index']);

//Custom Login and Registration Route
Route::get('dashboard', [CustomAuthController::class, 'dashboard'])->middleware('CheckUser');
Route::get('dashboard', [CustomAuthController::class, 'dashboard'])->name('dashboard')->middleware('CheckUser');
Route::get('signin', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('signup', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signOut');

//admin
Route::get('admin', [CustomAuthController::class, 'index_admin']);
Route::get('admin/dashboard', [CustomAuthController::class, 'dashboard_admin'])->name('dashboard_admin')->middleware('CheckAdmin');
Route::post('admin/dashboard/med/add', [MedController::class, 'med_add'])->name('med.add');

//user med view
Route::get('dashboard/view', [MedController::class, 'med_view'])->name('med.view')->middleware('CheckUser');

