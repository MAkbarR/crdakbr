<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use Illuminate\Support\Facades\Route;

//route resource
Route::middleware(['guest'])->group(function(){
    Route::get('/login',[LoginController::class,'index'])->name('login');
    Route::post('/login-proses',[LoginController::class,'login_proses'])->name('login-proses');
});

Route::get('/home', function(){
    return redirect('/admin');
});


Route::resource('/posts', \App\Http\Controllers\PostController::class);



Route::middleware(['auth'])->group(function(){
    Route::resource('/users', \App\Http\Controllers\UserController::class)->middleware('userAkses:user');
    Route::resource('/admins', \App\Http\Controllers\AdminController::class)->middleware('userAkses:admin');
    Route::get('/admin',[AdminController::class,'index'])->middleware('userAkses:admin');;
    Route::get('/liat', '\App\Http\Controllers\AdminController@liat')->middleware('userAkses:admin');;
    Route::get('/logout',[LogoutController::class,('logout')])->name('logout');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
