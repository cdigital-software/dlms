<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\LicenseController;
use App\Http\Controllers\LicenseDatatables;
use App\Models\License;
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
Route::get('users', ['uses'=>'UserController@index', 'as'=>'users.index']);
Route::get('/',[LicenseController::class,'index']);
Route::get('/home', function () {
    return view('welcome');
})->name('home');
Route::get('/register', function () {
    return view('welcome');
})->name('register');
Route::get('/logout', function () {
    return view('welcome');
})->name('logout');

Route::get('/user.index', function () {
    return view('welcome');
})->name('user.index');

Route::get('/icons', function () {
    return view('welcome');
})->name('icons');

Route::get('/map', function () {
    return view('dash');
})->name('map');


Route::get('/login', function () {
    return view('welcome');
})->name('login');

Route::get('/profile.edit', function () {
    return view('welcome');
})->name('profile.edit');

Route::post('/store' ,[LicenseController::class,'store'])->name('store');

Route::get('/dash',[LicenseController::class,'index'])->name('dash');
Route::get('/data',[LicenseController::class,'data']);
Route::get('/create',[LicenseController::class,'show'])->name('create');
Route::get('/edit',[LicenseController::class,'show_edit']);
Route::get('update/{id}',[LicenseController::class,'edit']);
Route::post('update-license/{id}',[LicenseController::class,'update'])->name('update-license');
Route::get('delete/{id}',[LicenseController::class,'destroy'])->name('delete');
Route::get('licenses', [LicenseControlle::class,'index']);