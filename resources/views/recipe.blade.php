<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>晩御飯</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href= "{{('/css/style_recipe.css')}}">
    </head>
    <body>
        <header class='header'>
        <h1>晩御飯、なんでもいいや・・・</h1>
        </header>
        <div class='list'>
            @foreach($recipe as $recipe)
                <div class='recipe'/>
                    <div class='title'>
                    <a href="/recipe/{{ $recipe->id }}">{{ $recipe->title }}</a>
                    </div>
                    <div class='material'>
                    <a href="/recipe/{{ $recipe->id }}">{{ $recipe->material }}</a>
                    </div>
                </div>
            @endforeach
        </div>
        [<a href='/create'>create</a>]
    </body>
</html>