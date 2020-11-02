<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class RecordsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->data() as $value) {
            DB::table('records')->insert($value);
        }
    }

    protected function data()
    {
        return [
            [
                'alias' => 'lorem-ipsum-dolor-sit-amet-1',
                'views' => rand(0, 140),
                'image' => null,
                'status' => 'active',
                'category_id' => rand(1, 4),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ], [
                'alias' => 'lorem-ipsum-dolor-sit-amet-2',
                'views' => rand(0, 140),
                'image' => null,
                'status' => 'draft',
                'category_id' => rand(1, 4),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ], [
                'alias' => 'lorem-ipsum-dolor-sit-amet-3',
                'views' => rand(0, 140),
                'image' => null,
                'status' => 'trash',
                'category_id' => rand(1, 4),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ], [
                'alias' => 'lorem-ipsum-dolor-sit-amet-4',
                'views' => rand(0, 140),
                'image' => null,
                'status' => 'disable',
                'category_id' => rand(1, 4),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ], [
                'alias' => 'lorem-ipsum-dolor-sit-amet-5',
                'views' => rand(0, 140),
                'image' => null,
                'status' => 'active',
                'category_id' => rand(1, 4),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ];
    }
}
