<?php

use Illuminate\Http\Request;


// LINE メッセージ受信
Route::post('/api/line/webhook', 'LineMessengerController@webhook');
 
// LINE メッセージ送信用
Route::post('/line/message', 'LineMessengerController@message');
    