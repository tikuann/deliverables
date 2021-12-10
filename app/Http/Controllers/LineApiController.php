<?php

namespace App\Http\Controllers;

use LINE\LINEBot\HTTPClient\CurlHTTPClient;
use LINE\LINEBot;
use App\Models\User;
use LINE\LINEBot\MessageBuilder\TextMessageBuilder;
use APP\LineFrend;
use Illuminate\Http\Request;
 
class LineApiController extends Controller
{
    // メッセージ送信用
    public function webhook() {
        $input=$request->all();
 

}

}
