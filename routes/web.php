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
    Route::get('/product', [FrontController::class, 'Product'])->name('frontend.products');

});



Route::middleware(['auth'])->group(function () {
    
    Route::get('/dashboard', [SuperAdminController::class, 'Dashboard'])->name('dashboard');
    Route::get('/view_user', [SuperAdminController::class, 'ViewUser'])->name('admin.viewuser');

    Route::get('/create_products', [SuperAdminController::class, 'CreateProducts'])->name('admin.create_products');
    Route::post('/create_products', [SuperAdminController::class, 'storeProduct'])->name('admin.store_product');

    Route::get('/view_products', [SuperAdminController::class, 'ViewProducts'])->name('admin.view_products');

    
});

Route::get('/storage/{path}', function ($path) {
    $filePath = storage_path('app/public/' . $path);

    if (!file_exists($filePath)) {
        abort(404);
    }

    return response()->file($filePath);
})->where('path', '.*');
