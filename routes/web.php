<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterControler;
use App\Http\Controllers\CompanyController;
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
route::get('login',[LoginController::class,'login'])->name('login');
route::post('loginUser',[LoginController::class,'loginUser'])->name('loginUser');
route::get('register',[RegisterControler::class,'register'])->name('register');
Route::get('dashboard', [LoginController::class, 'dashboard'])->middleware(['auth', 'is_verify_email']);
route::post('registerUser',[RegisterControler::class,'registerUser'])->name('registerUser');
Route::get('account/verify/{token}', [RegisterControler::class, 'verifyAccount'])->name('user.verify');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('getCompnayList', [CompanyController::class, 'getCompnayList'])->name('getCompnayList');