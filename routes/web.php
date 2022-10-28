<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\control\barangController;

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
Route::get('/',[barangController::class,'getAll']); 
Route::get('view/type',[barangController::class,'getList'])->name('type'); 
Route::get('view/list/{jenis?}/{id?}/{nama?}',[barangController::class,'getview'])->name('view');
Route::get('view/type/{id?}',[barangController::class,'getdaftar'])->name('daftar'); 
Route::get('view/contact_me',[barangController::class,'getContact'])->name('contact'); 
