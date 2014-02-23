<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('users', function()
{
    return Config::get('app.url', '');
;
});

//Route::get('user', 'UserController@getIndex');

Route::get('users2', function()
{
    return View::make('users2');
});


Route::get('users3', function()
{
    $users = User::all();

    return View::make('users3')->with('users', $users);
});

Route::get('user/{id}', function($id)
{
    return 'User '.$id;
});

Route::get('user2/{name?}', function($name = null)
{
    return $name;
});

