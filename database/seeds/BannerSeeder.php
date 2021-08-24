<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banner')->insert([
            [
                'id' => Str::uuid(),
                'title' => 'Banner 1',
                'description' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...',
                'photo' => 'assets/img/banner 5.jpg'
            ],[
                'id' => Str::uuid(),
                'title' => 'Banner 2',
                'description' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...',
                'photo' => 'assets/img/banner 3.jpg'
            ],[
                'id' => Str::uuid(),
                'title' => 'Banner 3',
                'description' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...',
                'photo' => 'assets/img/banner 2.jpg'
            ],[
                'id' => Str::uuid(),
                'title' => 'Banner 4',
                'description' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...',
                'photo' => 'assets/img/banner 1.jpg'
            ],[
                'id' => Str::uuid(),
                'title' => 'Banner 5',
                'description' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...',
                'photo' => 'assets/img/banner 6.jpg'
            ]
        ]);
    }
}
