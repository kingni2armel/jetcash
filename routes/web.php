<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\PageController;
use  App\Http\Controllers\ContactController;



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
Route::get('accueil',[PageController::class,'GETHOMEPAGE'])->name('GETHOMEPAGE');
Route::get('/apropos',[PageController::class,'GETPAGEAPROPOS'])->name('GETPAGEAPROPOS');
Route::get('/contact',[PageController::class,'GETPAGECONTACT'])->name('GETPAGECONTACT');

Route::post('/addcontact',[ContactController::class,'CREATECONTACT'])->name('CREATECONTACT');