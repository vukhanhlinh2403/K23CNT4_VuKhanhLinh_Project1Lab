<?php

use App\Http\Controllers\VklMonhocController;
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



#monhoc
Route::get('/monhocs',[VklMonhocController::class,'vklList'])->name('vklmonhoc.vklList');
#monhoc -detail
Route::get('/monhocs/detail/{makh}',
        [VklMonhocController::class,'vklgetMonhoc'])->name('vklmonhoc.vklgetmonhoc');
#Khoa - edit
Route::get('/monhocs/edit/{makh}',
        [VklMonhocController::class,'vklEdit'])->name('vklmonhoc.vklEdit');
Route::post('/monhocs/edit',
        [VklMonhocController::class,'vklEditSubmit'])->name('vklmonhoc.vklEditSubmit');
#khoa - insert
Route::get('/monhocs/insert',
        [VklMonhocController::class,'vklInsert'])->name('vklmonhoc.vklInsert');
Route::get('/monhocs/insert',
        [VklMonhocController::class,'vklInsertSubmit'])->name('vklmonhoc.vklInsertSubmit');
#khoa-delete
Route::get('/monhocs/delete/{makh}',
        [VklMonhocController::class,'vklDelete'])->name('vklmonhoc.vklDelete');
