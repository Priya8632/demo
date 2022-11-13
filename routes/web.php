<?php

use App\Http\Controllers\userController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\adminController;


use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin', function () {
    return view('admin.dashboard');
});
Route::view('/register','register');
Route::post('/userform',[userController::class,'create']);

Route::view('/login','login')->middleware('login');
Route::post('/logindata',[loginController::class,'loginuser']);
Route::get('/logout',[loginController::class,'logout']);

Route::view('/dashboard','dashboard')->middleware('logout');
Route::get('/admin_dashboard',[adminController::class,'data']);

Route::get('/delete/{id}', [userController::class, 'destroy']);
Route::get('/edit/{id}', [userController::class, 'edit']);
Route::put('edit/{id}', [userController::class, 'update']);


