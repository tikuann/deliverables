<?php

namespace App\Http\Controllers;

use LINE\LINEBot\HTTPClient\CurlHTTPClient;
use LINE\LINEBot;
use App\Models\User;
use LINE\LINEBot\MessageBuilder\TextMessageBuilder;
 
use Illuminate\Http\Request;
 
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
    public function webhook() {
 
        // LINEBOTSDKの設定
        $http_client = new CurlHTTPClient(config('services.line.channel_token'));
        $bot = new LINEBot($http_client, ['channelSecret' => config('services.line.messenger_secret')]);
 
        // LINEユーザーID指定
        $userId = "LINEユーザーID";
 
        // メッセージ設定
        $message = "こんにちは！";
 
        // メッセージ送信
        $textMessageBuilder = new TextMessageBuilder($message);
        $response    = $bot->pushMessage($userId, $textMessageBuilder);
 
    }
}


