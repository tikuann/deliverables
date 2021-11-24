<?php

namespace App\Http\Controllers;

use App\Category;
use App\Recipe;
use Illuminate\Http\Request;
use App\Http\Requests\RecipeRequest;

class recipeController extends Controller
{

public function index(Recipe $recipe)
{
    $category1 = Category::find(1);
    $Menu1 = ($category1->recipes->random());
    $category2 = Category::find(2);
    $Menu2 = ($category2->recipes->random());
    $category3 = Category::find(3);
    $Menu3= ($category3->recipes->random());
    $category4 = Category::find(4);
    $Menu4= ($category4->recipes->random());
    $category5 = Category::find(5);
    $Menu5= ($category5->recipes->random());
    return view('index')->with(['meat' => $Menu1, 'fish' => $Menu2, 'vegetable' => $Menu3, 'noodles' => $Menu4, 'egg' => $Menu5]);
}

public function show(Recipe $recipe)
{
    return view('show')->with(['recipe' => $recipe]);
        
}

public function recipe(Recipe $recipe)
{
    return view('recipe')->with(['recipe'=>$recipe->get()]);
}
public function create(Category $category)
{   
    return view('create')->with(['category'=>$category->get()]);
}

public function store(Recipe $recipe, Reciperequest $request)
{
    $input_recipe = $request['recipe'];
    $input_categories = $request->categories_array;
    $recipe->fill($input_recipe)->save();
    $recipe->categories()->attach($input_categories);
    return redirect('/recipe/' . $recipe->id);
}
public function edit(Recipe $recipe)
{
    return view('edit')->with(['recipe' => $recipe]);
}
public function update(Request $request, Recipe $recipe)
{
    $input_recipe = $request['recipe'];
    $recipe->fill($input_recipe)->save();

    return redirect('/recipe/' . $recipe->id);
}
}