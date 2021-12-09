<?php

use Illuminate\Http\Request;


// LINE メッセージ受信
Route::post('/line/webhook', 'LineApi@webhook');
 
// LINE メッセージ送信用
Route::post('/line/message', 'LineApi@message');
    