<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperAdminController; // Corrected the namespace
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

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/index', [FrontController::class, 'index'])->name('frontend.index');
    Route::get('/quotation', [FrontController::class, 'qoute'])->name('frontend.quote');
});



Route::middleware(['auth'])->group(function () {
    
    Route::get('/dashboard', [SuperAdminController::class, 'Dashboard'])->name('dashboard');
    Route::get('/view_user', [SuperAdminController::class, 'ViewUser'])->name('admin.viewuser');

    
});
