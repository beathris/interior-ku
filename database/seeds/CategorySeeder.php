<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            [
                'id' => 1,
                'name' => 'Mebel',
                'description' => 'Sudah merupakan fakta bahwa seorang pembaca akan terpengaruh oleh isi tulisan dari sebuah halaman saat ia melihat tata letaknya.',
                'image' => 'assets/img/Categories/Mebel.png'
            ],[
                'id' => 2,
                'name' => 'Mebel Berbasis Teknologi',
                'description' => 'Sudah merupakan fakta bahwa seorang pembaca akan terpengaruh oleh isi tulisan dari sebuah halaman saat ia melihat tata letaknya.',
                'image' => 'assets/img/Categories/Mebel-Berbasis-Teknologi.png'
            ],[
                'id' => 3,
                'name' => 'Dekorasi Rumah',
                'description' => 'Sudah merupakan fakta bahwa seorang pembaca akan terpengaruh oleh isi tulisan dari sebuah halaman saat ia melihat tata letaknya.',
                'image' => 'assets/img/Categories/Dekorasi-Rumah.png'
            ],[
                'id' => 4,
                'name' => 'Lukisan Kayu Custom',
                'description' => 'Sudah merupakan fakta bahwa seorang pembaca akan terpengaruh oleh isi tulisan dari sebuah halaman saat ia melihat tata letaknya.',
                'image' => 'assets/img/Categories/Lukisan.png'
            ]
        ]);
    }
}
