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

Route::post('/cliente', 'ClienteController@store');
Route::get('/cliente/{id}', 'ClienteController@show');
Route::put('/cliente/{id}', 'ClienteController@update');
Route::delete('/cliente/{id}', 'ClienteController@destroy');
Route::get('/consulta/final-placa/{numero}', 'ClienteController@showPlaca');

