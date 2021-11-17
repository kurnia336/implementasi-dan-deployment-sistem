<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\TokoController;
use App\Http\Controllers\ExcelController;

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
Route::get('/customer/tambah1', [CustomerController::class, 'create1']);
Route::post('/customer/tambah1', [CustomerController::class, 'store1']);
Route::get('/customer/tambah2', [CustomerController::class, 'create2']);
Route::post('/customer/tambah2', [CustomerController::class, 'store2']);
Route::get('/barcode/cetaktnj108', [BarangController::class, 'index']);
Route::get('/barcode/tambah', [BarangController::class, 'create']);
Route::post('/barcode/tambah', [BarangController::class, 'store']);
Route::post('/barcode/printpdf', [BarangController::class, 'print']);
Route::get('/barcode/scanner', [BarangController::class, 'scan']);
Route::get('/geolocation/listtoko', [TokoController::class, 'index']);
Route::get('/geolocation/listtoko/printbarcode/{id}', [TokoController::class, 'print']);
Route::get('/geolocation/inputtitikawal', [TokoController::class, 'create']);
Route::post('/geolocation/inputtitikawal', [TokoController::class, 'store']);
Route::get('/geolocation/titikkunjungan', [TokoController::class, 'barcodeScanner']);
Route::get('/excel', [ExcelController::class, 'create']);
Route::post('/excel', [ExcelController::class, 'store']);
Route::get('/ajax/kota', [AjaxController::class, 'kota']);
Route::get('/ajax/kecamatan', [AjaxController::class, 'kecamatan']);
Route::get('/ajax/kelurahan', [AjaxController::class, 'kelurahan']);
Route::get('/ajax/toko', [AjaxController::class, 'toko']);
Route::get('/ajax/kunjungan', [AjaxController::class, 'kunjungan']);
