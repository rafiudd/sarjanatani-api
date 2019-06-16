<?php

use Illuminate\Http\Request;
use App\Artikel;

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

Route::post('register', 'UserController@register');
Route::post('login', 'UserController@authenticate');
Route::post('logout', 'UserController@logout');
Route::get('open', 'DataController@open');
Route::get('show', 'UserController@show');
Route::get('show/{id}', 'UserController@all');


Route::resource('artikel','ArtikelController',['except' => ['create','edit']]);
Route::resource('lahan','LahanController');

Route::group(['middleware' => ['jwt.verify']], function() {
    Route::get('user', 'UserController@getAuthenticatedUser');
    Route::get('closed', 'DataController@closed');
});