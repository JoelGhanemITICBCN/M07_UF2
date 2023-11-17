<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignController;

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
Route::prefix('Joel')->group(function(){
    Route::get('/signin/{dato1}/{dato2}/{dato3}/{dato4}', [SignController::class,'signin']);
    Route::get('/signup/{dato1}/{dato2}/{dato3}', [SignController::class,'signup']);
});
