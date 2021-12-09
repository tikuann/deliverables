<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// LINE メッセージ受信
Route::post('/line/webhook', 'LineMessengerController@webhook')->name('line.webhook');
 
// LINE メッセージ送信用
Route::post('/line/message', 'LineMessengerController@message');
    