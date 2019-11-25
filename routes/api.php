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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::apiResource('books', 'BookController');
Route::apiResource('users', 'UserController');

//Route::post('store', 'BookController@store');
Route::get('show', 'BookController@show');

Route::post('storeUser', 'UserController@storeUser');
Route::get('showUsers', 'UserController@showUsers');
Route::post('login', 'UserController@login');

Route::group(['middleware' => ['auth']], function ()
{
    Route::apiResource('books', 'BookController');
    Route::post('store', 'BookController@store');
    Route::post('lendBook', 'BookController@lendBook');
});