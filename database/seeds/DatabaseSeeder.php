<?php

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
    	$this->call(CategoryTabeleSeeder::class);
    	//$this->call(BrandTabeleSeeder::class);

        // $this->call(UserSeeder::class);
    }
}
