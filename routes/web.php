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

Route::post('/sewer/tambah',[App\Http\Controllers\sewer_controller::class, 'tambah_sewer']);