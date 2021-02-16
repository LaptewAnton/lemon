<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeed extends Seeder
{
    public function run()
    {
        DB::table('tags')->insert([
            'name' => 'Тег 1',
        ]);
        DB::table('tags')->insert([
            'name' => 'Тег 2',
        ]);
        DB::table('tags')->insert([
            'name' => 'Тег 3',
        ]);
        DB::table('tags')->insert([
            'name' => 'Тег 4',
        ]);
        DB::table('tags')->insert([
            'name' => 'Тег 5',
        ]);
    }
}
