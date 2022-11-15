<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterControler;
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
route::get('register',[RegisterControler::class,'register'])->name('register');
route::post('registerUser',[RegisterControler::class,'registerUser'])->name('registerUser');
Route::get('account/verify/{token}', [RegisterControler::class, 'verifyAccount'])->name('user.verify');