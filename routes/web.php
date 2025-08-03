<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
})->name('welcome');
//Dashboard
Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');
//Login
Route::get('login',[AuthController::class,'login'])->name('login');
//User
Route::get('user',[UserController::class,'index'])->name('user');
//Tugas
Route::get('tugas',[TugasController::class,'index'])->name('tugas');
