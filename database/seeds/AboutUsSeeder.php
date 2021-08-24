<?php

use Illuminate\Database\Seeder;

class AboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('about_us')->insert([
            'id' => 1,
            'title' => "Perkenalkan, kami adalah Millennial",
            'description' => "Didirikan oleh I Wayan Vendy Wiranatha sejak tahun 2021, kami bergerak di bidang furnitur dan
                        desain interior. Kami menyediakan berbagai furnitur mulai dari furnitur ruang tamu, ruang makan,
                        kamar tidur, ruang kerja, hingga beragam dekorasi rumah. Seluruh furnitur yang kami jual
                        merupakan hasil karya perajin Indonesia dengan material kayu pilihan yang berkualitas premium
                        dengan harga terbaik.

                        Fokus pada kualitas, kenyamanan, dan kehangatan dari setiap furnitur yang kami jual. Dengan
                        menggabungkan aksen modern dan minimalis, produk yang kami jual memiliki cita estetika yang akan
                        menghangatkan rumahmu. Lebih daripada itu, kami memastikan bahwa furnitur dan produk yang kami
                        jual tak hanya unik secara visual namun juga sepenuhnya fungsional.",
            'image' => 'assets/img/AboutUs/Kayu.jpg',
            'email' => 'vendywira@gmail.com',
            'address' => 'Banjar Sudimara Kaja, Desa Sudimara, Tabanan',
            'location' => 'https://www.google.co.id/maps/dir//Jl.+Kalanganyar+Sudimara,+Sudimara,+Kec.+Tabanan,+Kabupaten+Tabanan,+Bali+82115/@-8.5815556,115.0479685,13z/data=!4m8!4m7!1m0!1m5!1m1!1s0x2dd237526fdaa441:0x991dfe409e85734e!2m2!1d115.0829879!2d-8.5816421?hl=id',
            'phone' => '081946444565'
        ]);
    }
}
