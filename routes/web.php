<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::get('/', function () {return view('welcome');})->middleware('alreadyLoggedIn');
Route::get('/login', [AuthController::class,'login'])->middleware('alreadyLoggedIn');
Route::get('/register', [AuthController::class,'register'])->middleware('alreadyLoggedIn');
Route::get('/dashboard',[AuthController::class,'dashboard'])->middleware('isLoggedIn');

Route::get('/dashboard/home',[AuthController::class,'dashboard'])->middleware('isLoggedIn');
Route::get('/dashboard/image',[AuthController::class,'dashboard'])->middleware('isLoggedIn');
Route::get('/dashboard/video',[AuthController::class,'dashboard'])->middleware('isLoggedIn');
Route::get('/dashboard/help',[AuthController::class,'dashboard'])->middleware('isLoggedIn');

Route::post('/register-user',[AuthController::class, 'registerUser'])->name('register-user');
Route::post('/login-user',[AuthController::class, 'loginUser'])->name('login-user');
Route::get('dashboard/logout',[AuthController::class,'logout']);

Route::post('dashboard/image/store', 'App\Http\Controllers\ImageController@imageStore')->middleware('isLoggedIn');
Route::get('dashboard/image/show', 'App\Http\Controllers\ImageController@imageShow')->middleware('isLoggedIn');
Route::get('dashboard/image/show/{id}', 'App\Http\Controllers\ImageController@imageVaizduot')->middleware('isLoggedIn');
Route::get('dashboard/image/delete/{id}','App\Http\Controllers\ImageController@imageDelete')->middleware('isLoggedIn');

Route::post('dashboard/video/store', 'App\Http\Controllers\VideoController@videoStore')->middleware('isLoggedIn');
Route::get('dashboard/video/show', 'App\Http\Controllers\VideoController@videoShow')->middleware('isLoggedIn');
Route::get('dashboard/video/show/{id}', 'App\Http\Controllers\VideoController@videoVaizduot')->middleware('isLoggedIn');
Route::get('dashboard/video/delete/{id}','App\Http\Controllers\VideoController@videoDelete')->middleware('isLoggedIn');
