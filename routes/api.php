<?php

use Illuminate\Http\Request;



Route::post('login', 'ApiController@login');
Route::post('register', 'ApiController@register');
Route::get('articeles', 'ArticeleController@index');
Route::get('articele/{id}', 'ArticeleController@show');
Route::post('parcel', 'ParcelController@store');


Route::group(['middleware' => 'auth.jwt'], function () {
   
    
  
   
});