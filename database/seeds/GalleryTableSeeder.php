<?php

use App\Gallery;
use Illuminate\Database\Seeder;

class GalleryTableSeeder extends Seeder {
    /**
    * Run the database seeds.
    *
    * @return void
    */

    public function run() {
        // $galleries = factory( Gallery::class, 8 )->create();
        DB::table( 'galleries' )->insert( [
            'img' => 'images/gallery-01.jpg'
        ] );
        DB::table( 'galleries' )->insert( [
            'img' => 'images/gallery-02.jpg'
        ] );
        DB::table( 'galleries' )->insert( [
            'img' => 'images/gallery-03.jpg'
        ] );
        DB::table( 'galleries' )->insert( [
            'img' => 'images/gallery-04.jpg'
        ] );
        DB::table( 'galleries' )->insert( [
            'img' => 'images/gallery-05.jpg'
        ] );
        DB::table( 'galleries' )->insert( [
            'img' => 'images/gallery-06.jpg'
        ] );
        DB::table( 'galleries' )->insert( [
            'img' => 'images/gallery-07.jpg'
        ] );
        DB::table( 'galleries' )->insert( [
            'img' => 'images/gallery-08.jpg'
        ] );
    }
}
