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

Auth::routes();

Route::view('/marketplace', 'marketplace')->name('marketplace');
Route::view('/inicio', 'home')->name('home');
Route::view('/nosotros', 'about')->name('aboutUs');
Route::view('/eventos', 'events')->name('events');
Route::view('/academia', 'academy')->name('academy');
Route::view('/contacto', 'contact')->name('contact');
Route::view('/calendario', 'calendar')->name('calendar');
Route::view('/blog', 'blog')->name('blog');
Route::view('/registro', 'register')->name('register');
