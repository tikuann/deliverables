<?php

use Illuminate\Http\Request;


// LINE メッセージ受信
Route::get('/line/webhook', 'LineApiController@webhook');
 
// LINE メッセージ送信用
Route::post('/line/message', 'LineApiController@message');
    