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

Route::get('/cambiar_idioma/{locale}', function ($locale) {
    if (! in_array($locale, ['en', 'es'])) {
        abort(400);
    }
    app()->setLocale($locale);
    \Session::put('locale', $locale);
    return redirect()->back();
    //
})->name('language.change');

Route::view('/marketplace', 'marketplace')->name('marketplace');
Route::view('/inicio', 'home')->name('home');
Route::view('/nosotros', 'about')->name('aboutUs');
Route::view('/eventos', 'events')->name('events');
Route::view('/academia', 'academy')->name('academy');
Route::view('/contacto', 'contact')->name('contact');
Route::view('/calendario', 'calendar')->name('calendar');
Route::view('/blog', 'blog')->name('blog');
Route::view('/registro', 'register')->name('register');
Route::view('/servicios', 'services')->name('services');
Route::view('/casos_de_exito', 'alies')->name('alies');

Route::get('/registrar/empresa','UserController@registerEnterprise')->name('user.enterprise.register');
Route::post('/registrar/empresa','UserController@storeEnterprise')->name('user.enterprise.store');

Route::get('/registrar/emprendedor','UserController@registerEntrepreneur')->name('user.entrepreneur.register');
Route::post('/registrar/emprendedor','UserController@storeEntrepreneur')->name('user.entrepreneur.store');

Route::get('/registrar/inversionista','UserController@registerPortfolio')->name('user.portfolio.register');
Route::post('/registrar/inversionista','UserController@storePortfolio')->name('user.portfolio.store');

Route::get('/retos', 'ChallengeController@index')->name('challenges.index');