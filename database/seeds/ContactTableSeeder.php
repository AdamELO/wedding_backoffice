<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactTableSeeder extends Seeder {
    /**
    * Run the database seeds.
    *
    * @return void
    */

    public function run() {
        DB::table( 'contacts' )->insert( [
            'title' => 'Titre',
            'text' => "text blablabla",
            'textbtn' => "Pour vous inscrire cliquez ici"
        ] );
    }
}
