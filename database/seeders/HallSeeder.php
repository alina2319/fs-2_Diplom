<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class HallSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hall')->insert([
            'name' => 'Зал 1',
            'row' => 7,
            'seats' => 10,
            'price' => 250,
            'vip_price' => 500,
            'is_active' => 0,
        ]);

        DB::table('hall')->insert([
            'name' => 'Зал 2',
            'row' => 8,
            'seats' => 6,
            'price' => 300,
            'vip_price' => 600,
            'is_active' => 0,
        ]);
    }
}
