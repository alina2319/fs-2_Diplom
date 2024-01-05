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
        // \App\Models\User::factory(10)->create();
        $this->call(HallSeeder::class);
        $this->call(FilmSeeder::class);
        $this->call(SeatSeeder::class);
        $this->call(MovieShowSeeder::class);
        $this->call(UserSeeder::class);
    }
}
