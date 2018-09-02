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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
Route::group(['prefix'=>'dev','namespace'=>'Dev'],function(){
    Route::post('login',['as'=>'login','uses'=>'RootController@login']);
});
Route::group(['prefix'=>'auth','namespace'=>'Auth'],function(){
});
Route::group(['prefix'=>'test','namespace'=>'Test'],function(){
    Route::get('/','TestController@test')->middleware(['auth','permission:test']);
    Route::get('/user','TestController@index');
});

Route::prefix('auth')->group(function($router) {
    $router->post('login', 'AuthController@login');
    $router->post('logout', 'AuthController@logout');
});

Route::middleware('refresh.token')->group(function($router) {
    $router->get('profile','UserController@profile');
});

