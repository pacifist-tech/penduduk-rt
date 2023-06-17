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

Route::get("/desa", function(){
    return view("desa");
});
Route::get("/penduduk", function(){
    return view("penduduk");
});
Route::get("/kelahiran", function(){
    return view("kelahiran");
});

Route::get("/kematian", function(){
    return view("kematian");
});
Route::get("/pindah", function(){
    return view("pindah");
});
Route::get("/datang", function(){
    return view("datang");
});

Route::get("/login", function(){
    return view("login");
});

Route::get("/register", function(){
    return view("register");
});
