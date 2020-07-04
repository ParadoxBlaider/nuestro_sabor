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

Route::get('/', 'HomeController@getHome');

Route::get('/restaurants', 'RestaurantController@getIndex');

Route::get('/restaurants/show/{id}','RestaurantController@getShow');

Route::get('/restaurants/create', 'RestaurantController@getCreate');

Route::get('/restaurants/edit/{id}','RestaurantController@getEdit');

Route::post('/restaurants/create','RestaurantController@postCreate');

Route::put('/restaurants/edit/{id}','RestaurantController@putEdit');

Route::delete('/catalog/delete/{id}','RestaurantController@deleteRestaurant');

Route::get('/stockpiles', 'StockPileController@getIndex');

Route::get('/stockpiles/create/{id}', 'StockPileController@getCreate');

Route::put('/stockpiles/create/{id}', 'StockPileController@postCreate');

