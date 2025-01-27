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

//Route::get('/about', function () {
//    return view('hello');
//});

Route::get('/about', function () {
    return view('hello');
})->name('about');


Route::get('/post/first-post', function () {
    return view('first-post');
});

//Route::get('/post', function () {
//   return "<h1>post h1</h1>";
//});

//Route::view('/post', '/post');

Route::get('/post/{id}/', function (string $id) {

    if ($id) {
        return "<h1>Post ID: ". $id ."</h1>";
    } else {
        return "<h1>No ID found</h1>";
    }
    
})->whereNumber('id');