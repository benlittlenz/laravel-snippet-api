<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'auth', 'namespace' => 'Auth'], function () {
    Route::post('signin', 'SignInController');
    Route::get('me', 'MeController');
    Route::post('signout', 'SignOutController');
});