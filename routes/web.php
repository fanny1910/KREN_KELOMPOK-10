<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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
Route::get('/admin/dashboard',[AdminController::class,'dashboard']);
Route::get('/admin/dashboard/penduduk',[AdminController::class,'index']);
Route::get('/admin/dashboard/tambah-penduduk',[AdminController::class,'tambah']);
Route::get('/admin/dashboard/ubah-penduduk',[AdminController::class,'ubah']);
//
Route::get('/admin/dashboard/layanan/',[AdminController::class,'layanan']);
Route::get('/admin/dashboard/layanan/umum',[AdminController::class,'umum']);

//
Route::get('/admin/dashboard/fitur',[AdminController::class,'fitur']);
Route::get('/admin/dashboard/fitur/umum',[AdminController::class,'umumfitur']);
