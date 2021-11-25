<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\menteeApplicationController;
use App\Http\Controllers\RegKuraController;
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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/childmentorship', [PagesController::class, 'childmentorship']);
Route::get('/elibrary', [PagesController::class, 'elibrary']);
Route::get('/ethical', [PagesController::class, 'ethical']);
Route::get('/hoc', [PagesController::class, 'hoc']);
Route::get('/internship', [PagesController::class, 'internship']);
Route::get('/lendbook', [PagesController::class, 'lendbook']);
Route::get('/schorlaship', [PagesController::class, 'schorlaship']);
Route::post('/successPay', [PagesController::class, 'successPay']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/staffs', App\Http\Controllers\StaffController::class);
Auth::routes();
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/mentee_application', App\Http\Controllers\menteeApplicationController::class);
Route::resource('/donate', App\Http\Controllers\donateController::class);
Route::resource('/contact_us', App\Http\Controllers\ContactController::class);
Route::resource('/backed', App\Http\Controllers\RegKuraController::class);
Route::resource('/books', App\Http\Controllers\BookController::class);


