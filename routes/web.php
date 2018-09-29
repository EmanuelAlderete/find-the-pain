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

Route::get('/', function () {
    return view('site.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');







Route::post('/sintoma/store', 'SintomasController@store')->name('sintoma-store');
Route::post('/problemas/store', 'ProblemasController@store')->name('problema-store');
Route::post('/subparte/store', 'SubPartesController@store')->name('subparte-store');
Route::post('/parte/store', 'PartesController@store')->name('parte-store');

//=================================================================================================
//==================================SISTEMA SITE===================================================
//=================================================================================================

Route::get('/parte/{nome}', 'SiteController@parte')->name('parte');
Route::get('/subparte/{id}', 'SiteController@subparte')->name('subparte');
