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
    return view('splash');
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

//Hannah Auth for Facebook
/**Route::get('login/user', function(){
    $uri = "http://10.0.0.86/User/Auth/Login/Facebook/";
    $response = \Httpful\Request::get($uri)->send();

    echo $response;
});**/

//if authorized, show profile page
Route::get('profile', [
    'middleware' => 'auth',
    'uses' => 'ProfileController@show'
]);

Route::get('upload2', 'UploadController@index');
Route::post('upload/add', 'UploadController@uploadFiles');

Route::get('testing', function(){
    return view('testing');
});

Route::post('testing/file-upload', 'TestingUploadController@index');

Route::get('matchmap', function(){
    return view('matchmap');
});
Route::get('explore', function(){
    return view('explore');
});

Route::resource('fileupload', 'FileController');

Route::get('upload', function() {
  return View::make('upload');
});
Route::post('apply/upload', 'ApplyController@upload');
