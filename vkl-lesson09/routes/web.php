<?php

use App\Http\Controller\VklController;
use App\Http\Controllers\VklSinhVienController;
use Illuminate\Support\Facades\Route;

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



#sinh vien - model
Route::get('/vkl-sinhviens',[VklSinhVienController::class,'vklList'])->name('VklSinhVien.vklList');
Route::get('/vkl-sinhviens/creat',[VklSinhVienController::class,'vklCreat'])->name('VklSinhVien.vklCreat');
Route::get('/vkl-sinhviens/creat',[VklSinhVienController::class,'vklCreatSubmit'])->name('VklSinhVien.vklCreatSubmit');
Route::get('/vkl-sinhviens/delete',[VklSinhVienController::class,'vkldelete'])->name('VklSinhVien.vkldelete');