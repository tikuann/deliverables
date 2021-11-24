<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{

//レシピに対するリレーション
public function recipes(){
    
    return $this->belongsToMany('App\Recipe');
}
}