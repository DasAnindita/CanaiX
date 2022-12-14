<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Registration;

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

Route::get('/registration',[Registration::class,'registration']);
Route::get('/login',[Registration::class,'login']);
Route::post('/register',[Registration::class,'registeruser'])->name('registeruser');
Route::post('/loginuser',[Registration::class,'loginuser'])->name('loginuser');
Route::get('/dashboard',[Registration::class,'dashboard'])->name('dashboard');
Route::get('/signout', [Registration::class, 'signOut'])->name('signout');
