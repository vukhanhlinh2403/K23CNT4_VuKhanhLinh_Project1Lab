<?php

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