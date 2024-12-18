<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VklSessionController;

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


Route::get('/session/get', [VklSessionController::class,'getSessionData'])->name('session.get');
Route::get('/session/set', [VklSessionController::class,'storeSessionData'])->name('session.set');
Route::get('/session/delete',[VklSessionController::class,'deleteSessionData'])->name('session.delete');