<?php

Route::get('/', function () {
    return redirect('/home');
});


Route::get('admin', function () {
    return redirect('/admin/index');
});


Route::group([
    'namespace' => 'Admin',
    'middleware' => 'auth',
        ], function () {
    Route::get('admin/index', 'AdminController@index');
    Route::get('admin/create', 'AdminController@create');
    Route::post('admin/store', 'AdminController@store');
    Route::get('admin/edit/{id}', 'AdminController@edit');
    Route::get('admin/showprofile/{id}', 'AdminController@show');
    Route::post('admin/update/{id}', 'AdminController@update');
    Route::get('admin/delete/{id}', 'AdminController@destroy');
    
    Route::get('post/index', 'PostController@index');
    Route::get('post/create', 'PostController@create');
    Route::post('post/store', 'PostController@store');
    Route::get('post/showpost/{id}', 'PostController@show');
});


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

//Content route
Route::get('/home', 'HomeController@index');
Route::get('/home/{slug}', 'HomeController@showPost');