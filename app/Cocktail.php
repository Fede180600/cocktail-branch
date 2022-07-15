<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cocktail extends Model
{
    protected $fillable = [
        'name',
        'glass_type',
        'type_of_preparation',
        'price'
    ];

    public function ingredients()
    {
       return $this->belongsToMany('App\Ingredient');    
    }
}
