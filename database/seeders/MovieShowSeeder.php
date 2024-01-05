<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use DateTime;

class MovieShowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = new DateTime();
        $date->modify('+1 hour');
        $date1 = $date->format('Y-m-d');
        $hour1 = $date->format('H');
        $minutes1 = $date->format('i');
        $minuteStart1 = $hour1 * 60 + $minutes1;

        $date = new dateTime();
        $date->modify('+4 hour');
        $date2 = $date->format('Y-m-d');
        $hour2 = $date->format('H');
        $minutes2 = $date->format('i');
        $minuteStart2 = $hour2 * 60 + $minutes2;

        $date = new dateTime();
        $date->modify('+8 hour');
        $date3 = $date->format('Y-m-d');
        $hour3 = $date->format('H');
        $minutes3 = $date->format('i');
        $minuteStart3 = $hour3 * 60 + $minutes3;

        $date = new dateTime();
        $date->modify('+12 hour');
        $date4 = $date->format('Y-m-d');
        $hour4 = $date->format('H');
        $minutes4 = $date->format('i');
        $minuteStart4 = $hour4 * 60 + $minutes4;

        $date = new dateTime();
        $date->modify('+24 hour');
        $date5 = $date->format('Y-m-d');
        $hour5 = $date->format('H');
        $minutes5 = $date->format('i');
        $minuteStart5 = $hour5 * 60 + $minutes5;

        $date = new dateTime();
        $date->modify('+26 hour');
        $date6 = $date->format('Y-m-d');
        $hour6 = $date->format('H');
        $minutes6 = $date->format('i');
        $minuteStart6 = $hour6 * 60 + $minutes6;

        DB::table('movie_show')->insert([
            'hall_id' => 1,
            'film_id' => 1,
            'film_name' => 'Звёздные войны XXIII: Атака клонированных клонов',
            'start_day' => $date1,
            'start_time' => $minuteStart1,
            'movie_show_duration' => 130,
            'ordered' => '[]',
        ]);

        DB::table('movie_show')->insert([
            'hall_id' => 1,
            'film_id' => 2,
            'film_name' => 'Альфа',
            'start_day' => $date2,
            'start_time' => $minuteStart2,
            'movie_show_duration' => 96,
            'ordered' => '[]',
        ]);

        DB::table('movie_show')->insert([
            'hall_id' => 2,
            'film_id' => 2,
            'film_name' => 'Альфа',
            'start_day' => $date3,
            'start_time' => $minuteStart3,
            'movie_show_duration' => 96,
            'ordered' => '[]',
        ]);

        DB::table('movie_show')->insert([
            'hall_id' => 1,
            'film_id' => 1,
            'film_name' => 'Звёздные войны XXIII: Атака клонированных клонов',
            'start_day' => $date4,
            'start_time' => $minuteStart4,
            'movie_show_duration' => 130,
            'ordered' => '[]',
        ]);

        DB::table('movie_show')->insert([
            'hall_id' => 2,
            'film_id' => 1,
            'film_name' => 'Звёздные войны XXIII: Атака клонированных клонов',
            'start_day' => $date5,
            'start_time' => $minuteStart5,
            'movie_show_duration' => 130,
            'ordered' => '[]',
        ]);

        DB::table('movie_show')->insert([
            'hall_id' => 1,
            'film_id' => 1,
            'film_name' => 'Звёздные войны XXIII: Атака клонированных клонов',
            'start_day' => $date6,
            'start_time' => $minuteStart6,
            'movie_show_duration' => 130,
            'ordered' => '[]',
        ]);
    }
}
