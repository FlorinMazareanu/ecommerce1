<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'PagesController@index');
Route::get('/product/{prod}', 'PagesController@product');
Route::get('/category/{categ}', 'PagesController@category');
Route::get('/authentication', 'PagesController@authentication');
Route::post('/authentication/register', 'UserController@register');
Route::post('/authentication/login', 'UserController@login');
Route::get('authentication/logout', 'UserController@logout');

