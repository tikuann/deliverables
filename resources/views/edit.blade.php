<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>晩御飯</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
                <link rel="stylesheet" href="{{('/css/style_edit.css')}}"> 
    </head>
<body>
    @extends('layouts.app')
    @section('content')
    {{Auth::user()->name}}
    <div class='main'>
    <h1 class="title">編集画面</h1>
    <div class="content">
        <form action="/recipe/{{$recipe->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class='content__title'>
                <h2>タイトル</h2>
                <input type='text' name='recipe[title]' value="{{ $recipe->title }}">
            </div>
            <div class='content__material'>
                <h2>材料</h2>
                <input type='text' name='recipe[material]' value="{{ $recipe->material }}">
            </div>
            <div class="content__procedure">
                <h4>手順</h4>
                <input type='text' name='recipe[procedure]' value="{{ $recipe->procedure}}">
            </div>
            <div class="quote">
                <h5>引用</h4>
                <input type='text' name='quote[quote]' value="{{ $recipe->quote}}">
            </div>
            <input type="submit" value="保存">
        </form>
    </div>
    </div>
    @endsection
</body>
