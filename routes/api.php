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
$router->group(['prefix' => 'api'], function () use ($router) {

    $router->get('/', function () use ($router) {
        return "API is working.";
    });

    $router->post('register', [
        'as' => 'register', 'uses' => 'Api\AuthController@register'
    ]);

    $router->post('login', [
        'as' => 'login', 'uses' => 'Api\AuthController@login'
    ]);

    $router->group(['middleware' => 'auth:api'], function () use ($router) {
        $router->get('users/{userid}', [
            'as' => 'users', 'uses' => 'Api\UserController@getUserData'
        ]);
    });

});