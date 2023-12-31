<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/', [ProductController::class, 'index'])->name('index');
Route::get('/addProduct', [ProductController::class, 'addProduct'])->name('addProduct');
Route::post('/addProduct', [ProductController::class, 'store'])->name('store');
Route::get('/export', [ProductController::class, 'export'])->name('export');
Route::get('/sendEmail', [ProductController::class, 'sendEmail'])->name('sendEmail');
