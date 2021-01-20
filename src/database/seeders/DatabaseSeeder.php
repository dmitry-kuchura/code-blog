<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(RecordsSeeder::class);
         $this->call(RecordsI18nSeeder::class);
         $this->call(CategoriesSeeder::class);
         $this->call(CategoriesI18nSeeder::class);
    }
}
