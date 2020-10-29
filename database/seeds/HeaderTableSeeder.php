<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeaderTableSeeder extends Seeder {
    /**
    * Run the database seeds.
    *
    * @return void
    */

    public function run() {
        DB::table( 'headers' )->insert( [
            'title' => '#Leida & #Dominic',
            'subtitle' => "We're getting married",
            'subtitledate' => "Save The Date",
            'date' => Carbon::create( '2018', '06', '20' ),
            'img' => 'images/slider-01.jpg',
        ] );
        DB::table( 'headers' )->insert( [
            'title' => '#Leida & #Dominic',
            'subtitle' => "We're getting married",
            'subtitledate' => "Save The Date",
            'date' => Carbon::create( '2018', '06', '20' ),
            'img' => 'images/slider-02.jpg',
        ] );
        DB::table( 'headers' )->insert( [
            'title' => '#Leida & #Dominic',
            'subtitle' => "We're getting married",
            'subtitledate' => "Save The Date",
            'date' => Carbon::create( '2018', '06', '20' ),
            'img' => 'images/slider-03.jpg',
        ] );
    }
}
