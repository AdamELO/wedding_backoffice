<?php

use App\About;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutTableSeeder extends Seeder {
    /**
    * Run the database seeds.
    *
    * @return void
    */

    public function run() {
        DB::table( 'abouts' )->insert( [
            'subtitle' => 'Leida',
            'text' => 'Lorem Ipsum Fusce convallis ante id purus sagittis malesuada. Sed erat ipsum, suscipit sit amet auctor',
            'img' => 'images/about-img-01.jpg',
        ] );
        DB::table( 'abouts' )->insert( [
            'subtitle' => 'Dominic',
            'text' => 'Lorem Ipsum Fusce convallis ante id purus sagittis malesuada. Sed erat ipsum, suscipit sit amet auctor',
            'img' => 'images/about-img-02.jpg',
        ] );
    }
}
