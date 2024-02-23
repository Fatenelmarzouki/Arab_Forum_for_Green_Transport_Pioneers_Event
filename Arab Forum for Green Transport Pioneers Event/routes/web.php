<?php

use App\Http\Controllers\SponserController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('index');
})->name("new");

Route::get('conf', function () {
    return view('pages.confluence');
});

Route::get('who', function () {
    return view('pages.who are you');
});

Route::get('parteners', function () {
    return view('pages.parteners shared');
});

Route::get('Media', function () {
    return view('pages.Media channel');
});

Route::get('secreg', function () {
    return view('pages.second form');
});

Route::get('firreg', function () {
    return view('pages.first form');
});


Route::get("register",[UserController::class,"registerPage"]);
Route::get("registersponser",[SponserController::class,"registerSponserPage"]);
Route::post('newuser',[UserController::class,'register']);
Route::post('newsponser',[SponserController::class,'handleSponser']);



Route::get("sendmail/{id}",[UserController::class,"getCode"]);
Route::get("checkonline",[UserController::class,"isOnIine"]);
Route::get("cine",[UserController::class,"gt"]);





