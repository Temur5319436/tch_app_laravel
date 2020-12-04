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
Route::get('/workers/search', 'App\Http\Controllers\UserController@search');
Route::post('/workers/register', 'App\Http\Controllers\UserController@register');

Route::middleware('auth.basic')->group(function () {
    Route::get('/lists/get_list/{date}', 'App\Http\Controllers\ListController@getList');
    Route::get('/user', 'App\Http\Controllers\UserController@user');
});