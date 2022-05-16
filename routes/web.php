<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Zeft;
use App\http\Controllers\auth\LoginController;
use App\http\Controllers\auth\LogoutController;
use App\http\Controllers\auth\RegisterController;
use App\http\Controllers\problemsController;

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


Route::view('/', 'layouts.app')->name('index');
//  Route::DELETE('/delete/{id}',[OrderController::class, 'destroy'])->name('delete');

Route::POST('/',[problemsController::class,'index'])->name('showproblems');
   


