<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([
    'prefix' => 'menu_items'
], function () {
    Route::get('/', 'MenuItemController@list');
    Route::get('types', 'TypeController@list');
    Route::get('/{type}', 'MenuItemsController@listOfType');
});

Route::group([
    'prefix' => 'orders'
], function () {
    Route::get('/', 'OrderController@list');
    Route::post('/', 'OrderController@store');
});
