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
use App\http\Controllers\LadderUserController;


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


Route::get('/', [LadderUserController::class,'joinedRecently'])->name('index');
Route::get('/exploreladders',[LadderController::class,'index'])->name('exploreladders');
Route::get('/ladders/{id}',[Ladder_ProblemController::class,'viewLadder'])->name('exploreladderid');

Route::get('/myladders',[LadderUserController::class,'userLadders'])->name('userladders');
Route::POST('/joinladder/{id}',[LadderUserController::class,'store'])->name('joinladder');

//Route::POST('/',[problemsController::class,'index'])->name('showproblems');

//Route::DELETE('/delete/{id}',[OrderController::class, 'destroy'])->name('delete');
//-----------------Admin----------------//
ROUTE::view('/admin','admin.create')->name('create')->middleware('admin');
ROUTE::view('/admin/storeladder','admin.createladder')->name('viewaddladder')->middleware('admin');
ROUTE::get('/admin/addproblemtoladder',[LadderController::class,'getladders'],'admin.addproblemtoladder')->name('addproblemtoladder')->middleware('admin');
Route::POST('/admin/storeladder',[LadderController::class,'store'])->name('storeladder')->middleware('admin');
Route::POST('/admin/addproblemtoladder',[Ladder_ProblemController::class,'store'])->name('addproblemtoladder')->middleware('admin');
ROUTE::get('/admin/updateproblemset',[ProblemController::class,'updateproblemset'])->name('updateproblemset')->middleware('admin');


//-----------Login Register Logout------------//
Route::POST('/logout', [LogoutController::class, 'store'])->name('logout');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class,'store'])->name('register');


