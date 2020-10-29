<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
    * Seed the application's database.
    *
    * @return void
    */

    public function run() {
        $this->call( RoleTableSeeder::class );
        $this->call( UserSeeder::class );
        $this->call( GalleryTableSeeder::class );
        $this->call( HeaderTableSeeder::class );
        $this->call( AboutTableSeeder::class );
        $this->call( ContactTableSeeder::class );
    }
}
