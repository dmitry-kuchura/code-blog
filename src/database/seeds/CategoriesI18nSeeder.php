<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class CategoriesI18nSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->data() as $value) {
            DB::table('categories_i18n')->insert($value);
        }
    }

    protected function data()
    {
        return [
            [
                'category_id' => 1,
                'name' => 'Lorem ipsum dolor sit amet-RU',
                'title' => 'Lorem ipsum dolor sit amet',
                'keywords' => null,
                'description' => null,
                'language' => 'ru',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ], [
                'category_id' => 1,
                'name' => 'Lorem ipsum dolor sit amet-EN',
                'title' => 'Lorem ipsum dolor sit amet',
                'keywords' => null,
                'description' => null,
                'language' => 'en',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ], [
                'category_id' => 1,
                'name' => 'Lorem ipsum dolor sit amet-UA',
                'title' => 'Lorem ipsum dolor sit amet',
                'keywords' => null,
                'description' => null,
                'language' => 'ua',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ], [
                'category_id' => 2,
                'name' => 'Lorem ipsum dolor sit amet-RU',
                'title' => 'Lorem ipsum dolor sit amet',
                'keywords' => null,
                'description' => null,
                'language' => 'ru',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],  [
                'category_id' => 2,
                'name' => 'Lorem ipsum dolor sit amet-RU',
                'title' => 'Lorem ipsum dolor sit amet',
                'keywords' => null,
                'description' => null,
                'language' => 'en',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ], [
                'category_id' => 2,
                'name' => 'Lorem ipsum dolor sit amet-RU',
                'title' => 'Lorem ipsum dolor sit amet',
                'keywords' => null,
                'description' => null,
                'language' => 'ua',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ], [
                'category_id' => 3,
                'name' => 'Lorem ipsum dolor sit amet-EN',
                'title' => 'Lorem ipsum dolor sit amet',
                'keywords' => null,
                'description' => null,
                'language' => 'en',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ], [
                'category_id' => 3,
                'name' => 'Lorem ipsum dolor sit amet-UA',
                'title' => 'Lorem ipsum dolor sit amet',
                'keywords' => null,
                'description' => null,
                'language' => 'ua',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ], [
                'category_id' => 3,
                'name' => 'Lorem ipsum dolor sit amet-RU',
                'title' => 'Lorem ipsum dolor sit amet',
                'keywords' => null,
                'description' => null,
                'language' => 'ru',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ], [
                'category_id' => 4,
                'name' => 'Lorem ipsum dolor sit amet-RU',
                'title' => 'Lorem ipsum dolor sit amet',
                'keywords' => null,
                'description' => null,
                'language' => 'ru',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ], [
                'category_id' => 4,
                'name' => 'Lorem ipsum dolor sit amet-EN',
                'title' => 'Lorem ipsum dolor sit amet',
                'keywords' => null,
                'description' => null,
                'language' => 'en',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ], [
                'category_id' => 4,
                'name' => 'Lorem ipsum dolor sit amet-UA',
                'title' => 'Lorem ipsum dolor sit amet',
                'keywords' => null,
                'description' => null,
                'language' => 'ua',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        ];
    }
}
