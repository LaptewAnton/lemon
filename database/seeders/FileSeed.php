<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FileSeed extends Seeder
{
    public function run()
    {
        DB::table('files')->insert([
            'name' => 'example1',
            'extension' => '.png',
            'description' => 'Пример описания 1',
        ]);
        DB::table('files')->insert([
            'name' => 'example2',
            'extension' => '.png',
            'description' => 'Пример описания 2',
        ]);
        DB::table('files')->insert([
            'name' => 'example3',
            'extension' => '.png',
            'description' => 'Пример описания 3',
        ]);
        DB::table('files')->insert([
            'name' => 'example4',
            'extension' => '.png',
            'description' => 'Пример описания 4',
        ]);
    }
}
