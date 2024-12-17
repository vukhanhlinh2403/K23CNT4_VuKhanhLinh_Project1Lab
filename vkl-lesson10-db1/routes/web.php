<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VkINhaCCController;
use App\Http\Controllers\VklVattuController;

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



Route::get('/vkl-nhaccs',[VklNhaCCController::class,'list'])->name('vklnhacc.list');
Route::get('/vkl-vattus',[VklVattuController::class,'list'])->name('vklvattu.list');