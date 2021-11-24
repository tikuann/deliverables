<?php

Route::get('/', 'RecipeController@index');
Route::get('/create', 'RecipeController@create');
Route::get('/recipe/{recipe}/edit', 'RecipeController@edit');
Route::put('/recipe/{recipe}', 'RecipeController@update');
Route::delete('/recipe/{recipe}', 'RecipeController@delete');
Route::get('/recipe/{recipe}', 'RecipeController@show');
Route::get('/recipe', 'RecipeController@recipe');
Route::post('/recuoe', 'RecipeController@store');
