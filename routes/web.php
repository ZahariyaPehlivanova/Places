<?php

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

Route::group([], function (\Illuminate\Routing\Router $router) {
    $router->get('/', ['as' => 'home', 'uses' => 'Controller@home']);
});

Route::group(['namespace' => 'Auth'], function (\Illuminate\Routing\Router $router) {
    $router->get('/login', ['as' => 'login', 'uses' => 'LoginController@index']);
    $router->post('/login', ['as' => 'login2', 'uses' => 'LoginController@login']);
    $router->get('/register', ['as' => 'register', 'uses' => 'RegisterController@index']);
    $router->post('/register', ['as' => 'register', 'uses' => 'RegisterController@register']);
});

Route::group(['namespace' => 'Rooms'], function (\Illuminate\Routing\Router $router) {
    $router->get('/update-room/{roomId?}', ['as' => 'room.update', 'uses' => 'RoomsController@update']);
    $router->post('/update-room/{roomId?}', ['as' => 'room.update', 'uses' => 'RoomsController@save']);
});
