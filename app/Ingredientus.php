<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredientus extends Model
{
    //
    protected $table = 'ingredientus';
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
