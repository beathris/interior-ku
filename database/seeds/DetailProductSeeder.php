<?php

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DetailProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mebel = Product::where('category_id', 1)->first();
        $dekorasi = Product::where('category_id', 3)->first();
        $lukisan = Product::where('category_id', 4)->first();

        DB::table('detail_product')->insert([
               'id'=> Str::uuid(),
               'product_id' => $mebel->id,
               'name' => $mebel->name,
               'color' => 'Buff',
               'image1' => 'assets/img/Products/Meja Makan/image1.jpg',
               'image2' => 'assets/img/Products/Meja Makan/image2.jpg',
               'image3' => 'assets/img/Products/Meja Makan/image3.jpg',
               'image4' => 'assets/img/Products/Meja Makan/image4.jpg',
               'image5' => 'assets/img/Products/Meja Makan/image5.jpg',
               'image6' => 'assets/img/Products/Meja Makan/image6.jpg',
               'width' => 80,
               'height' => 72,
               'length' => 50,
               'total_price' => 2500000
        ]);

        DB::table('detail_product')->insert([
                'id'=> Str::uuid(),
                'product_id' => $dekorasi->id,
                'name' => $dekorasi->name,
                'color' => 'White mix Black',
                'image1' => 'assets/img/Products/Jam Dinding/image1.jpg',
                'image2' => 'assets/img/Products/Jam Dinding/image2.jpg',
                'image3' => 'assets/img/Products/Jam Dinding/image3.jpg',
                'width' => 25,
                'height' => 2,
                'length' => 25,
                'total_price' => 50000
        ]);

        DB::table('detail_product')->insert([
           [
                'id'=> Str::uuid(),
                'product_id' => $lukisan->id,
                'name' => $lukisan->name,
                'color' => 'White',
                'image1' => 'assets/img/Products/Lukisan/image1.jpg',
                'image2' => 'assets/img/Products/Lukisan/image2.jpg',
                'width' => 30,
                'length' => 15,
                'total_price' => 50000
            ],
        ]);
    }
}
