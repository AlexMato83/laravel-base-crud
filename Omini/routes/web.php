<?php

use Illuminate\Support\Facades\Route;



Route::get('/', "OminiController@index")->name("home");
Route::get('/showOmino/{id}', "OminiController@show")->name("show");
Route::get('/createOmini', "OminiController@create")->name("create");
Route::post('/storeOmini', "OminiController@store")->name("store");

Route::get('/editOmini/{id}', "OminiController@edit")->name("edit");
Route::post('/updateOmini/{id}', "OminiController@update")->name("update");
