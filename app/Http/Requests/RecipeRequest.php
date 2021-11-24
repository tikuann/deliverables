<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecipeRequest extends FormRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'recipe.title' => 'required|string|max:100',
            'recipe.material' => 'required|string|max:4000',
            'recipe.procedure' => 'required|string|max:4000',
            'recipe.quote' => 'required|string|max:200',
        ];
    }
}

