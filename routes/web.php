<?php
Route::group(['middleware' => 'auth'], function(){
Route::get('/', 'RecipeController@index');
Route::get('/create', 'RecipeController@create');
Route::get('/recipe/{recipe}/edit', 'RecipeController@edit');
Route::put('/recipe/{recipe}', 'RecipeController@update');
Route::delete('/recipe/{recipe}', 'RecipeController@delete');
Route::get('/recipe/{recipe}', 'RecipeController@show');
Route::get('/recipe', 'RecipeController@recipe');
Route::post('/recuoe', 'RecipeController@store');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// line webhook受取用
Route::post('/line/callback',    'LineApiController@postWebhook');
// line メッセージ送信用
Route::get('/line/message/send', 'LineApiController@sendMessage');
    