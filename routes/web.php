<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;


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
    return view('welcome');
});

Route::get('/word_score/{word}',[Controller::class,'word_score']);


Route::get('/custom_class',[Controller::class,'custom_class']);

Route::get('/xor',[Controller::class,'xorr']);
Route::get('/prediction/{card}/{animal}/{fruit}',[Controller::class,'prediction']);
