<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Firebase\ContactController;

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

// sol url - sağ class
Route::get('contacts',[ContactController::class,'index']);
Route::get('profil',[ContactController::class,'profile']);
Route::get('dikey',[ContactController::class,'dgs']);
Route::get('yatay',[ContactController::class,'yatay']);
Route::get('yazokulu',[ContactController::class,'yazokulu']);
Route::get('cap',[ContactController::class,'cap']);
Route::get('intibak',[ContactController::class,'intibak']);
Route::get('add-contact',[ContactController::class,'kayit']);
Route::post('add-contact',[ContactController::class,'store']);
Route::post('add-sign',[ContactController::class,'sign']);
Route::get('add-basvuru',[ContactController::class,'basvur']);
Route::post('yg-basvuru',[ContactController::class,'yg_basvur']);
Route::get('pass',[ContactController::class,'password']);
Route::post('pass',[ContactController::class,'sifre']);
Route::get('adminpanel',[ContactController::class,'adminpanel']);
Route::get('customer',[ContactController::class,'customer']);



Route::get('/', function () {
    return view('welcome');
});
