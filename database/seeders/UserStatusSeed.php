<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserStatusSeed extends Seeder
{
    public function run()
    {
        DB::table('user_statuses')->insert([
            'name' => 'Домохозяйка',
        ]);
        DB::table('user_statuses')->insert([
            'name' => 'Молодожены',
        ]);
        DB::table('user_statuses')->insert([
            'name' => 'Бизнеследи',
        ]);
    }
}
