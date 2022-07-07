<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cocktail extends Model
{
    protected $fillable = [
        'name',
        'glass_type',
        'ingredients',
        'type_of_preparation',
        'price'
    ];
}
