<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
$router->get('/', function () use ($router) {
	return redirect('/login');
});

$router->get('login/','LoginController@loginPage');

$router->get('logout/','LoginController@logout');

$router->post('login/','LoginController@loginEndpoint');

$router->get('user/list/', 'UserController@index');

$router->get('user/create/', 'UserController@create');

$router->get('user/edit/{id}', 'UserController@edit');

$router->get('user/delete/{id}', 'UserController@delete');

$router->post('user/','UserController@store');

$router->get('user/{id}/', 'UserController@show');

$router->put('user/{id}/', 'UserController@update');

$router->delete('user/{id}/', 'UserController@destroy');
