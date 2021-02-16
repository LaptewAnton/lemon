<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RecipeSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0;$i<=100;$i++) {
            DB::table('recipes')->insert([
                'title' => 'Рецепт '.Str::random(10),
                'description' => 'Описание'. Str::random(10),
                'ingridients' => 'Ингридиенты '.Str::random(10),
                'time' => '10 минут',
                'difficulty' => 'Просто',
            ]);
        }
    }
}
