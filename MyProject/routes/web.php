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


Route::get('/comics/create', 'ComicsController@create')->name('comics.create');
Route::post('/comics', 'ComicsController@store')->name('comics.store');
Route::get('/comics', 'ComicsController@index')->name('comics.index');


Route::get('/comics/{Id}', 'ComicsController@show')->name('comics.show');

Route::match(["PUT", "PATCH"], '/comics/{Id}', 'ComicController@update')->name('comics.update');
//è prassi avere rotte sia put che patch ma avendo lo stesso nome, può usare il 'match'
//patch aggiorna solo dei campi, put sostituisce completamente l'elemento
Route::delete('/comics/{Id}', 'ComicsController@destroy')->name('comics.destroy');

Route::get('/comics/{Id}/edit', 'ComicsController@edit')->name('comics.edit');
