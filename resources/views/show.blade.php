<!doctype html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>晩御飯、なんでもいいや・・・</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{('/css/style_show.css')}}">   
        </head>
    <body>
        @extends('layouts.app')
        @section('content')
        {{Auth::user()->name}}
        <div class='main'>
        <h1 class="title">
            {{ $recipe->title }}
        </h1>
        <div class="content">
            <div class="content__material">
                <h3>材料</h3>
                <p>{{ $recipe->material }}</p>  
            </div>
            <div class="content__procedure">
                <h4>手順</h4>
                <p>{{ $recipe->procedure}}</p>
            </div>
            <div class="quote">
                <h5>引用</h4>
                <p>{{ $recipe->quote}}</p>
            <div class="content__category">
                <h5>カテゴリー</h5>
                {{-- このレシピに関連するカテゴリーの数だけ繰り返す --}}
                @foreach($recipe->categories as $category)   
                {{ $category->category_name }}
                @endforeach
            </div>    
                 <p class="edit">[<a href="/recipe/{{ $recipe->id }}/edit">edit</a>]</p>  
            </div>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
        </div>
        @endsection
    </body>
</html>