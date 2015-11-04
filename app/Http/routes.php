<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

//by model
$router->bind('songs',function($slug){
    return songs\Song::whereSlug($slug)->first();
});

$router->resource('songs','SongsController');

//if I need change the url name instead songs some like music/{path}/
//$router->get('music',['as'=> 'songs_path', 'uses' => 'SongsController']);

// $router->resource('people','SongsController',['except' => 'create']);
//Route::get('songs','SongsController@index');
//Route::get('songs/{song}','SongsController@show');
//Route::get('songs/{song}/edit','SongsController@edit');
//Route::patch('songs/{song}','SongsController@update');

