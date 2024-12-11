<?php

use App\Http\Controllers\VklKhoaController;
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


#Khoa
Route::get('/khoas',[VklKhoaController::class,'vklGetAllKhoa'])->name('vklkhoa.vklgetallkhoa');
#Khoa - detail
Route::get('/khoas/detail/{makh}',
        [VklKhoaController::class,'vklGetKhoa'])->name('vklkhoa.vklgetkhoa');
#Khoa - edit
Route::get('/khoas/edit/{makh}',
        [VklKhoaController::class,'vklEdit'])->name('vklkhoa.vklEdit');
Route::post('/khoas/edit',
        [VklKhoaController::class,'vklEditSubmit'])->name('vklkhoa.vklEditSubmit');
#khoa - insert
Route::get('/khoas/insert',
        [VklKhoaController::class,'vklInsert'])->name('vklkhoa.vklInsert');
Route::get('/khoas/insert',
        [VklKhoaController::class,'vklInsertSubmit'])->name('vklkhoa.vklInsertSubmit');
#khoa-delete
Route::get('/khoas/delete/{makh}',
        [VklKhoaController::class,'vklDelete'])->name('vklkhoa.vklDelete');
