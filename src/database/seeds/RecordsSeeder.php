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
                'alias' => 'lorem-ipsum-dolor-sit-amet',
                'views' => rand(0, 140),
                'image' => null,
                'status' => 'active',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ], [
                'alias' => 'lorem-ipsum-dolor-sit-amet',
                'views' => rand(0, 140),
                'image' => null,
                'status' => 'draft',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ], [
                'alias' => 'lorem-ipsum-dolor-sit-amet',
                'views' => rand(0, 140),
                'image' => null,
                'status' => 'trash',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ], [
                'alias' => 'lorem-ipsum-dolor-sit-amet',
                'views' => rand(0, 140),
                'image' => null,
                'status' => 'disable',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ], [
                'alias' => 'lorem-ipsum-dolor-sit-amet',
                'views' => rand(0, 140),
                'image' => null,
                'status' => 'active',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ];
    }
}
