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
route::get('/downloadPDF/pemasukkanpdf',[App\Http\Controllers\pemasukkan_controller::class, 'download_pemasukkan'])->name('downloadpdf_pemasukkan');
route::get('/downloadPDF/pengeluaranpdf',[App\Http\Controllers\pengeluaran_controller::class, 'download_pengeluaran'])->name('downloadpdf_pengeluaran');
route::get('/downloadPDF/gajipdf',[App\Http\Controllers\penggajian_controller::class, 'download_gaji'])->name('downloadpdf_gaji');

Route::get('/transaksi', [App\Http\Controllers\transaksi_controller::class, 'index_transaksi'])->name('transaksi');
Route::post('/transaksi/tambah',[App\Http\Controllers\transaksi_controller::class, 'tambah_transaksi']);
Route::get('/edittransaksi/{id_transaksi}',[App\Http\Controllers\transaksi_controller::class, 'findidtransaksi'])->name('edittransaksi');
Route::get('/deletetransaksi/{id_transaksi}',[App\Http\Controllers\transaksi_controller::class, 'deletetransaksi']);

Route::get('/penggajian', [App\Http\Controllers\penggajian_controller::class, 'index_gaji'])->name('penggajian');
Route::post('/penggajian/tambah',[App\Http\Controllers\penggajian_controller::class, 'tambah_gaji']);
Route::get('/editgaji/{id_gaji}',[App\Http\Controllers\penggajian_controller::class, 'findidgaji'])->name('editgaji');
Route::get('/deletegaji/{id_gaji}',[App\Http\Controllers\penggajian_controller::class, 'deletegaji']);

Route::get('/pemasukkan', [App\Http\Controllers\pemasukkan_controller::class, 'index_pemasukkan'])->name('pemasukkan');
Route::post('/pemasukkan/tambah',[App\Http\Controllers\pemasukkan_controller::class, 'tambah_pemasukkan']);
Route::get('/editpemasukkan/{id_pemasukkan}',[App\Http\Controllers\pemasukkan_controller::class, 'findidpemasukkan'])->name('editpemasukkan');
Route::get('/deletepemasukkan/{id_pemasukkan}',[App\Http\Controllers\pemasukkan_controller::class, 'deletepemasukkan']);

Route::get('/pengeluaran', [App\Http\Controllers\pengeluaran_controller::class, 'index_pengeluaran'])->name('pengeluaran');
Route::post('/pengeluaran/tambah',[App\Http\Controllers\pengeluaran_controller::class, 'tambah_pengeluaran']);
Route::get('/editpengeluaran/{id_pengeluaran}',[App\Http\Controllers\pengeluaran_controller::class, 'findidpengeluaran'])->name('editpengeluaran');
Route::get('/deletepengeluaran/{id_pengeluaran}',[App\Http\Controllers\pengeluaran_controller::class, 'deletepengeluaran']);
