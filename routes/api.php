<?php

use Illuminate\Http\Request;
use App\User;

Route::post('login', 'ApiController@login');
Route::post('register', 'ApiController@register');
Route::get('articeles', 'ArticeleController@index');

Route::group(['middleware' => 'auth.jwt'], function () {
   
    

   
});