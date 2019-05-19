<?php

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

Route::get('/','PortfoliosController@index');
Route::get('portfolios/portfolios','PortfoliosController@portfolios')->name('portfolios.portfolios');
Route::get('portfolios/{id}/imagestore','PortfoliosController@imageStore')->name('portfolios.imagestore');
Route::post('portfolios/{id}/imagestore','PortfoliosController@imageStore')->name('portfolios.imagestore');


Route::resource('portfolios','PortfoliosController');
Route::resource('contacts','ContactsController');
Route::get('contacts/{id}/reply','ContactsController@reply')->name('contacts.reply');


Route::resource('users','UsersController');

Route::resource('abouts','AboutsController');


Route::get('signup','Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup','Auth\RegisterController@register')->name('signup.post');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');
Route::group(['middleware' => ['auth']], function () {
    Route::resource('users', 'UsersController', ['only' => ['index','edit']]);
});
