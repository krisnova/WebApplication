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

Route::get('/', function(){
    return view('index');
});

Route::get('login', function(){
    return view('login');
});

Route::get('login/user', function(){
    $uri = "http://10.0.0.86/User/Auth/Login/Facebook/";
    $response = \Httpful\Request::get($uri)->send();

    echo $response;
});

Route::get('profile', function(){
    return view('profile');
});
Route::get('matchmap', function(){
    return view('matchmap');
});
Route::get('explore', function(){
    return view('explore');
});
