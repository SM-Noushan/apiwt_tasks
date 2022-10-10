<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

/*Route::get('/', function () {
    return view('home');
});*/

/*My Home Page
Route::get('/home', function () {
    return view('home');
})->name('home');*/

Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/services', [PagesController::class, 'service'])->name('service');
Route::get('/our-team', [PagesController::class, 'our_team'])->name('our-team');
Route::get('/about-us', [PagesController::class, 'about_us'])->name('about-us');
Route::get('/contact-us', [PagesController::class, 'contact_us'])->name('contact-us');
