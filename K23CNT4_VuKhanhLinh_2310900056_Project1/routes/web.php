<?php

use App\Http\Controllers\Vkl_Loai_San_PhamController;
use App\Http\Controllers\Vkl_San_PhamController;
use App\Http\Controllers\Vkl_Quan_TriController;
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


Route::get('/admins/vkl-login',[Vkl_Quan_TriController::class,'vklLogin'])->name('admins.vklLogin');     
Route::post('/admins/vkl-login',[Vkl_Quan_TriController::class,'vklLoginSubmit'])->name('admin.vklLoginSubmit');     



#admins -route
Route::get('/vkl-admins',function(){
    return view('vklAdmins.index');
});


Route::get('/vkl-admins/vkl-loai-san-phams',[Vkl_Loai_San_PhamController::class,'vklList'])->name('vklAdmins.vklLoaiSanPhams');



Route::get('/vkl-admins/vkl-loai-san-phams/vkl-create',[Vkl_Loai_San_PhamController::class,'vklCreate'])->name('vklAdmins.vklLoaiSanPhams.vklCreate');
Route::post('/vkl-admins/vkl-loai-san-phams/vkl-create',[Vkl_Loai_San_PhamController::class,'vklCreateSubmit'])->name('vklAdmins.vklLoaiSanPhams.vklCreateSubmit');



Route::get('/vkl-admins/vkl-loai-san-phams/vkl-edit/{id}',[Vkl_Loai_San_PhamController::class,'vklEdit'])->name('vklAdmins.vklLoaiSanPhams.vklEdit');
Route::post('/vkl-admins/vkl-loai-san-phams/vkl-edit',[Vkl_Loai_San_PhamController::class,'vklEditSubmit'])->name('vklAdmins.vklLoaiSanPhams.vklEditSubmit');



Route::get('/vkl-admins/vkl-loai-san-phams/vkl-delete/{id}',[Vkl_Loai_San_PhamController::class,'vklDelete'])->name('vklAdmins.vklLoaiSanPhams.vklDelete');



// san pham
Route::get('/vkl-admins/vkl-san-phams',[Vkl_San_PhamController::class,'vklList'])->name('vklAdmins.vklSanPhams');


Route::get('/vkl-admins/vkl-san-phams/vkl-create',[Vkl_San_PhamController::class,'vklCreate'])->name('vklAdmins.vklSanPhams.vklCreate');
Route::post('/vkl-admins/vkl-san-phams/vkl-create',[Vkl_San_PhamController::class,'vklCreateSubmit'])->name('vklAdmins.vklSanPhams.vklCreateSubmit');
