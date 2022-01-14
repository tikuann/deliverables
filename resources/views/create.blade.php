<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>晩御飯</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
               <link rel="stylesheet" href="{{('/css/style_create.css')}}">
    </head>
    <body>
        @extends('layouts.app')
        @section('content')
        {{Auth::user()->name}}
        <h1>晩御飯、なんでもいいや・・・</h1>
        <div class='create'>
            <form action="/recuoe" method="POST">
                @csrf
                <div class='title'>
                    <h2>タイトル</h2>
                    <textarea name="recipe[title]" placeholder="タイトル" rows="4" cols="40" value="{{ old('recipe.title') }}"></textarea>
                    <p class="title__error" style="color:red">{{ $errors->first('recipe.title') }}</p>
                </div>
                <div class='material'>
                    <h3>材料</h3>
                    <textarea name="recipe[material]" placeholder="材料" rows="4" cols="40" value="{{ old('recipe.material') }}"/></textarea>
                    <p class="title__error" style="color:red">{{ $errors->first('recipe.material') }}</p>
                </div>
                <div class='procedure'>
                    <h3>作り方</h3>
                    <textarea name="recipe[procedure]" placeholder="作り方" value="{{ old('recipe.procedure') }}"/>
                    <p class="title__error" style="color:red">{{ $errors->first('recipe.procedure') }}</p>
                </div>
                    <div class='quote'>
                    <h3>引用</h3>
                    <input type="url" name="recipe[quote]" placeholder="引用" value="{{ old('recipe.quote') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('recipe.quote') }}</p>
                </div> 
                <h2>カテゴリー</h2>
                @foreach($category as $item)

                   <label>
                   <input type="checkbox" value="{{ $item->id }}" name="categories_array[]">
                       {{$item->category_name}}
                   </input>
                   </label>
            
                @endforeach         
                <input type="submit" value="保存"/>
                </div>
            </form>
            <div class="back">[<a href="/list">back</a>]</div>
        </div>
        @endsection
    </body>
</html>