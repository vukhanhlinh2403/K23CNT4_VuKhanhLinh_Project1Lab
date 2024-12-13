<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\NamedProfileController;

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


Route::get('/greeting', function () {
    return '<h1> Hello World</1>';
});



Route::get('/devmaster', function () {
    return '<h1> welcom to, devmaster academy!</1>';
});


#Redirect routes
Route::redirect('/here', '/there');
Route::get('/there',function () {
    return '<h1>Redirect: here to there</h1>';
});

#routes view
Route::get('/vu-linh', function () {
    return view('vulinh');
});


#required parameters
Route::get('/devmaster/{id}', function (string $id) {
    return '<h1> devmaster</h1> '.$id;
});

Route::get('/posts/{post}/comments/{comment}', function (string $postId, string $commentId) {
    return '<h1> posts: $postId ; comments:$commentId';
});


Route::get('/user/{id}', function (Request $request, string $id) {
    return '<h1>User-></h1> '.$id;
});


#Optional Parameters
Route::get('/dev/{name?}', function (?string $name = null) {
    return "<h1>welcom to, $name";
});


Route::get('/user-dev/{name?}', function (?string $name = 'vulinh') {
    return "<h1>welcom to, $name";
});


#Regular Expression Constraints
Route::get('/user-constraints/{name}', function (string $name) {
    return "<h1> route constraints [A-Za-z]+ ";
})->where('name', '[A-Za-z]+');


Route::get('/user-constraints/{id}', function (string $id) {
    return "<h1> route contraints [0-9]+";
})->where('id', '[0-9]+');



Route::get('/user-contraints/{id}/{name}', function (string $id, string $name) {
    return "<h1> route contraints ['id' => '[0-9]+', 'name' => '[a-z]+']";
})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);



Route::get('/user-check/{id}/{name}', function (string $id, string $name) {
    return "<h1> user-check whereNumber('id')->whereAlpha('name') [$id,$mane]";
})->whereNumber('id')->whereAlpha('name');


Route::get('/user-check/{name}', function (string $name) {
    return "<h1> user-check whereAlphaNumeric('name') => [$name]";
})->whereAlphaNumeric('name');


#Encoded Forward Slashes
Route::get('/search/{search}', function (string $search) {
    return "<h1> tham so tren url la unicode: $search</h1>";
})->where('search', '.*');

#Named routes
Route::get('/named/profile', function () {
    return "<h1> dat ten route</h1>";
})->name('named.profile');

Rote::get('/named/display',
    [NamedProfileController::class, 'display']
)->name('display.profile');
Route::get('/named/show',[NamedProfileController::class, 'show']);


#Route Group prefix
Route::group(['prefix'=>'admin'],function(){
    Route::get('/',function(){ return "<h1> Admin home </h1>";});
    Route::get('/account',function(){ return "<h1> Admin account </h1>";});
    Route::get('/product',function(){ return "<h1> Admin product </h1>";});
});