<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            RecipeSeed::class, UserSeed::class, RecipeCategorySeed::class,
            UserStatusSeed::class, TagSeed::class, FileSeed::class,
        ]);
    }
}
