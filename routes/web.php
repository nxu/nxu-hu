<?php

Route::group(['domain' => 'link.' . env('APP_DOMAIN')], function () {
    Route::get('/', 'LinkAppController@index');
    Route::get('/my-links', 'LinkAppController@myLinks');

    Route::get('/login', 'AuthController@login');
    Route::get('/logout', 'AuthController@logout');
    Route::get('/login-callback', 'AuthController@callback');

    Route::resource('/internal-api/links', 'LinkController', [
        'only' => ['index', 'store', 'update', 'destroy']
    ]);
});

Route::get('/', 'HomeController@index');

