<?php

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

//Route::get('/test', function () {
//    return view('test');
//});

Route::get('/test', function () {
    return view('test',[ProductController::class,'index']);
});

Route::get('/view-11',function(){return view('view11');});
Route::get('/view-22',function(){return view('view22',['name'=>'Welcome to,Devmaster']);});
Route::get('/view-33',function(){return view('view33',['name'=>'Quản trị nộidung']);});
Route::get('/view-44',[ViewdemoController::class,'view44'])->name('viewdemo.view44');
Route::get('/view-55',[ViewdemoController::class,'view55'])->name('viewdemo.view55');
Route::get('/view-66',function(){return view('view66');});



Route::get('/view-1',function(){return view('view1',['name'=>"k23cnt4 - project 1 - hac cong tu linh"]);});
Route::get('/view-2',function(){
    return view('view2',[
                'name'=>"k23cnt4 - project 1 - hac cong tu linh",
                'array'=>[1,3,2,6,9]
                ]);
    
});

Route::get('/view-3',function(){
    return view('view2',[
                'name'      =>["vu","linh","hac cong tu"],
                'arr'       =>[12,22,21,33,55,35],
                'users'     => []
                ]);
    
});





Route::get('/home',function(){
    return view('index');
});
Route::get('/about-us',function(){
    return view('about');
});
Route::get('/contact',function(){
    return view('contact');
});