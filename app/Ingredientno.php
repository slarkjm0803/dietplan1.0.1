<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredientno extends Model
{
    //
    protected $table = 'ingredientno';
    protected $primaryKey = 'id';

    protected $fillable = [
        'diet_id',
        'ingredient',
        'value',
        'unit',
        'ingredient_name',
        'ingredient_div'
    ];
}
