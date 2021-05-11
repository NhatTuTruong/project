<?php

use App\Http\Controllers\LanguageController;
use App\Http\Controllers\UserController;
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
Route::get('/cache', function () {
    return cache('key');
});
Route::middleware(['language'])->group(function () {
    Route::get('users',[UserController::class,'index'])->name('index');
    Route::get('change-language/{language}',[LanguageController::class,'setLanguage'])->name('user.change-language');
});
