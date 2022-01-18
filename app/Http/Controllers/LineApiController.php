<?php

namespace App\Http\Controllers;

use LINE\LINEBot\HTTPClient\CurlHTTPClient;
use LINE\LINEBot;
use App\Models\User;
use LINE\LINEBot\MessageBuilder\TextMessageBuilder;
use APP\LineFrend;
use Illuminate\Http\Request;
use Log;
 
class LineApiController extends Controller
{
    
    protected $access_token;
    protected $channel_secret;

    public function __construct()
    {
        // :point_down: アクセストークン
        $this->access_token = env('LINE_ACCESS_TOKEN');
        // :point_down: チャンネルシークレット
        $this->channel_secret = env('LINE_CHANNEL_SECRET');
    }
    // メッセージ送信用
    public function webhook(Request $request) {
        // LINEから送られた内容を$inputsに代入
        $input=$request->all();

    }
}