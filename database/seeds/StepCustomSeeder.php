<?php

use Illuminate\Database\Seeder;

class StepCustomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('step_customs')->insert([
           [
               'id' => 1,
               'step' => 'Pilih Model Product',
               'description' => 'Memilih barang sesuai dan sesuai kebutuhan, klien dapat memilih model pada halaman product'
           ], [
               'id' => 2,
               'step' => 'Menetukan Bahan',
               'description' => 'Klien dapat memilih bahan yang sudah kami sediakan'
           ], [
               'id' => 3,
               'step' => 'Menentukan Warna dan Ukuran',
               'description' => 'Klien dapat memilih warna yang disukai dan menentukan ukuran (panjang, lebar dan tinggi) yang sesuai dengan kebutuhan'
           ], [
               'id' => 4,
               'step' => 'Melakukan Pembayaran',
               'description' => 'Setelah rancangan product sudah fix dan akan dibuat klien diharapkan dapat melakukan pembayaran tanda jadi minimal 10% dari total pembelian
               atau melakukan pembayaran secara lunas'
           ], [
               'id' => 5,
               'step' => 'Proses Pembuatan',
               'description' => 'Lama pembuatan tergantung dengan kesulitan product, kami akan berusaha menyelesaikan secara tepat waktu'
           ],

        ]);
    }
}
