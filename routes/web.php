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

//Route::get('/', function () {
//    return view('user.index');
//});

//Route::get('/form ', function () {
    //return view('user.form');
//});

//Route::get('/welcome', function () {
 //   return view('user.welcome');
//});

Route::get('/', function () {
        return view ('layout.master');
});
