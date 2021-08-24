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
        $this->call([
//            UserSeeder::class,
            AboutUsSeeder::class,
            BannerSeeder::class,
            CategorySeeder::class,
            ProductSeeder::class,
            DetailProductSeeder::class,
            StepCustomSeeder::class
        ]);
    }
}
