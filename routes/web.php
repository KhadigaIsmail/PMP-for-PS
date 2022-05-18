<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Zeft;
use App\http\Controllers\auth\LoginController;
use App\http\Controllers\auth\LogoutController;
use App\http\Controllers\auth\RegisterController;
use App\http\Controllers\problemsController;
use App\http\Controllers\ProblemController;
use App\http\Controllers\LadderController;
use App\http\Controllers\Ladder_ProblemController;
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
ROUTE::view('/admin','admin.create')->name('create');
ROUTE::view('/admin/storeladder','admin.createladder')->name('viewaddladder');
ROUTE::view('/admin/storeproblemtoladder','admin.addproblemtoladder')->name('viewstoreproblemtoladder');

Route::POST('/admin/storeproblem',[problemController::class,'store'])->name('storeproblem');
Route::POST('/admin/storeladder',[LadderController::class,'store'])->name('storeladder');
Route::POST('/admin/storeproblemtoladder',[Ladder_ProblemController::class,'store'])->name('storeproblemtoladder');

ROUTE::get('/loadProblemset',[ProblemController::class,'getAllProblems']);


