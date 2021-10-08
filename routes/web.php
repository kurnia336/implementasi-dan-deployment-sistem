<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AjaxController;

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
Route::redirect('/', '/customer/data');
Route::get('/customer/data', [CustomerController::class, 'index']);
Route::get('/customer/tambah1', [CustomerController::class, 'create']);
Route::post('/customer/tambah1', [CustomerController::class, 'store']);
Route::get('/ajax/kota', [AjaxController::class, 'kota']);
Route::get('/ajax/kecamatan', [AjaxController::class, 'kecamatan']);
Route::get('/ajax/kelurahan', [AjaxController::class, 'kelurahan']);
