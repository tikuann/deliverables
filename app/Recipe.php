<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class recipe extends Model
{
    protected $fillable = [
    'id',    
    'title',
    'body',
    'material',
    'procedure',
    'quote',
];

//カテゴリーに対するリレーション
public function categories(){
    
    return $this->belongsToMany('App\Category');
}
}
