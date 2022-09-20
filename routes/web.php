<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

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

//Routing index
Route::get('/', [ListingController::class, 'index']);

//Show Create Form
Route::get('/create',[ListingController::class,'create'])->middleware('auth');

//Store Data
Route::post('/listings',[ListingController::class,'store'])->middleware('auth');

//Delete
Route::delete('/listings/{listing}',[ListingController::class,'destroy'])->middleware('auth');

//Show Edit Form
Route::get('/listings/{listing}/edit',[ListingController::class,'edit'])->middleware('auth');

//Save Edit
Route::put('/listings/{listing}',[ListingController::class,'update'])->middleware('auth');

//Manage Listing Page
Route::get('/listings/manage',[ListingController::class, 'manage' ])->middleware('auth');

//Show
Route::get('/listings/{listing}', [ListingController::class, 'show']);

//Register User Form
Route::get('/users/register',[UserController::class,'register'])->middleware('guest');

//Register User
Route::post('/users',[UserController::class,'store']);

//Logout
Route::post('/logout',[UserController::class,'logout'])->middleware('auth');

//Login
Route::get('/login',[UserController::class,'login'])->name('login')->middleware('guest');

//Login
Route::post('/users/authenticate',[UserController::class,'authenticate']);