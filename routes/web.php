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


Route::get('/', ['uses' =>'PasteController@index', 'as' => 'home']);

Route::get('/show/{hash}', ['uses' =>'PasteController@show'])->name('show');

Route::post('/add', ['uses' =>'PasteController@store']);