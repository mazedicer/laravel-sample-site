<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','PagesController@getHome');

Route::post('/','PagesController@login');

Route::get('/contact','PagesController@getContact')->middleware('auth');

Route::get('/messages', 'MessagesController@getMessages')->middleware('auth');

Route::post('/contact', 'MessagesController@submit');