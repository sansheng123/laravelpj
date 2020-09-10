<?php

use Illuminate\Database\Seeder;

class BrandTabeleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Brand::class,5)->create();
    }
}
