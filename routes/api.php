<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::post('SalesController', 'SalesController@createSalestable');
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('create', 'SalesController@create');
Route::put('update/{id}', 'SalesController@update');
Route::get('fetch', 'SalesController@fetch');
Route::delete('delete/{id}', 'SalesController@delete');
