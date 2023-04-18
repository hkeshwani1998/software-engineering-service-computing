<?php

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

//new comment 
//second coommmnet

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

//Login and register routes
Route::get('/login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'App\Http\Controllers\Auth\LoginController@login');
Route::post('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('/register', 'App\Http\Controllers\Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'App\Http\Controllers\Auth\RegisterController@register')->name('register_submit');

// Dashboard route
Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');

//Enroll route
Route::post('/enroll', 'App\Http\Controllers\DashboardController@enroll')->name('enroll');

//graduation route
Route::get('/graduation', 'App\Http\Controllers\DashboardController@graduation')->name('graduation');

//Profile route
Route::get('/profile', 'App\Http\Controllers\DashboardController@profile')->name('profile');
Route::post('/profile/update', 'App\Http\Controllers\DashboardController@updateProfile')->name('profile.update');

