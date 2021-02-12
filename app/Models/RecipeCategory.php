<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recipeCategory extends Model
{
    use HasFactory;
    protected $table = 'recipe_categories';
    protected $fillable = [
        'name'
    ];
}
