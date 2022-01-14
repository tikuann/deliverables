<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{('/css/style_index.css')}}">
         <title>晩御飯</title>
    </head>
    <body>
        @extends('layouts.app')
        @section('content')
        {{Auth::user()->name}}
        <header class="header">
            <h1>晩御飯、なんでもいいや..</h1>
            <ul class="main">
            <li>[<a href='https:/line.me/R/ti/p/@979ixxdx'>Line友達登録はこちら！</a>]</li>
            <li>[<a href='/recipe'>レシピ集はこちら！</a>]</li>
            </ul>
        </header>
        <div class='home'>
            
            <h2 class='title'></h2>
            <p class='body1'>晩御飯って何にするか迷いますよね。</p>
            <p class='body1'>晩御飯って何にするか迷いますよね。</p>
            <p class='body2'>そんな時に使ってみてください。</p>
            <p class='body3'>おすすめの晩御飯レシピを紹介します。</p>
        </div>
        <div class='meat'>
            <div class='container'>
            [<a href='/recipe/{{ $meat->id }}'>肉</a>]
            [<a href='/recipe/{{ $fish->id }}'>魚</a>]
            [<a href='/recipe/{{ $vegetable->id }}'>野菜</a>]
            [<a href='/recipe/{{ $noodles->id }}'>麺類</a>]
            [<a href='/recipe/{{ $egg->id }}'>玉子系</a>]
            </div>
        </div>
   　　  [<a href='/create'>create</a>] 
   　　  @endsection
    </body>
</html>