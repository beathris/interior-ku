<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
           [
               'id' => Str::uuid(),
               'category_id' => 1,
               'name' => 'Meja Makan Minimalis',
               'ingredient' => 'Kayu Jati',
               'ingredient_price' => 125000
           ],[
               'id' => Str::uuid(),
               'category_id' => 3,
               'name' => 'Jam Dinding Unik',
               'ingredient' => 'Pipa Paralon',
               'ingredient_price' => 50000
           ],[
               'id' => Str::uuid(),
               'category_id' => 4,
               'name' => 'Lukisan Graduation',
               'ingredient' => 'Kayu Nangka',
               'ingredient_price' => 50000
           ],
        ]);
    }
}
