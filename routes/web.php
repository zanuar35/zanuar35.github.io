<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',function() {
    return view('login');
});

Route::get('/carakerja',function() {
    return view('carakerja');
});


Route::get('/create',function(){
    return view('create');
});


Route::get('/regist',function(){
    return view('regist');
});


Route::get('/1',function(){
    return view('1');
});

Route::get('/2',function(){
    return view('2');
});

Route::get('/3',function(){
    return view('3');
});


Route::get('/inves',function(){
    return view('inves');
});

Route::get('/produk',function(){
    return view('produk');
});

Route::get('/lupaPw',function(){
    return view('lupaPw');
});