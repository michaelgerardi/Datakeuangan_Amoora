<?php

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

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\sewer_controller::class, 'index_sewer'])->name('home');
Route::get('/admin/login', [App\Http\Controllers\Auth\authadminController::class, 'showLoginForm'])->name('admin.slogin');
Route::post('/admin/login', [App\Http\Controllers\Auth\authadminController::class, 'login'])->name('admin.login');
Route::get('/admin/logout', [App\Http\Controllers\Auth\authadminController::class, 'logout'])->name('admin.logout');
Route::get('/admin/home', [App\Http\Controllers\AdminController::class, 'index'])->name('homeadmin');

Route::get('/sewer', [App\Http\Controllers\sewer_controller::class, 'index_sewer'])->name('sewer');
Route::post('/sewer/tambah',[App\Http\Controllers\sewer_controller::class, 'tambah_sewer']);
Route::get('editsewer/{id_sewer}',[App\Http\Controllers\sewer_controller::class, 'findidsewer'])->name('editsewer');
Route::get('/deletesewer/{id_sewer}',[App\Http\Controllers\sewer_controller::class, 'deletesewer']);

Route::get('generate-pdf', [PDFController::class, 'generatePDF']);
route::get('/downloadPDF/sewerpdf',[App\Http\Controllers\sewer_controller::class, 'download_sewer'])->name('downloadpdf_sewer');
route::get('/downloadPDF/transaksipdf',[App\Http\Controllers\transaksi_controller::class, 'download_transaksi'])->name('downloadpdf_transaksi');

Route::get('/transaksi', [App\Http\Controllers\transaksi_controller::class, 'index_transaksi'])->name('transaksi');
Route::post('/transaksi/tambah',[App\Http\Controllers\transaksi_controller::class, 'tambah_transaksi']);
Route::get('/edittransaksi/{id_transaksi}',[App\Http\Controllers\transaksi_controller::class, 'findidtransaksi'])->name('edittransaksi');
Route::get('/deletetransaksi/{id_transaksi}',[App\Http\Controllers\transaksi_controller::class, 'deletetransaksi']);

Route::get('/pemasukkan', [App\Http\Controllers\pemasukkan_controller::class, 'index_pemasukkan'])->name('pemasukkan');
Route::post('/pemasukkan/tambah',[App\Http\Controllers\pemasukkan_controller::class, 'tambah_pemasukkan']);
Route::get('edittranosaksi/{id_transaksi}',[App\Http\Controllers\transaksi_controller::class, 'edit_transaksi']);
Route::get('/deletetransaksi/{id_transaksi}',[App\Http\Controllers\transaksi_controller::class, 'deletetransaksi']);
