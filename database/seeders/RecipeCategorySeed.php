<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecipeCategorySeed extends Seeder
{
    public function run()
    {
        DB::table('recipe_categories')->insert([
            'name' => 'Категория 1',
        ]);
        DB::table('recipe_categories')->insert([
            'name' => 'Категория 2',
        ]);
        DB::table('recipe_categories')->insert([
            'name' => 'Категория 3',
        ]);
        DB::table('recipe_categories')->insert([
            'name' => 'Категория 4',
        ]);
        DB::table('recipe_categories')->insert([
            'name' => 'Категория 5',
        ]);
    }
}
