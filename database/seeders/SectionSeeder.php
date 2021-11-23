<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Section::create([
            'head' => 'Rental',
            'descr' => 'Memberikan Layanan Jasa Sewa Profesional yang menyediakan Unit Sewa Laptop, Sewa Komputer, Sewa Projector, Sewa TV, Sewa Printer, Sewa Mesin Kasir, Sewa Mesin Hitung Uang, Sewa Drone, dan Multimedia',
        ]);
        Section::create([
            'head' => 'Unit',
            'descr' => 'Terimakasih telah berkunjung di Cempaka Rental, kami merupakan perusahaan resmi penyedia layanan jasa Sewa Laptop, Komputer, Projector, TV, dan Perangkat Multimedia lainnya dengan kualitas terbaik dan kuantitas unit stok kami sendiri terbanyak hingga ratusan unit.',
        ]);
        Section::create([
            'head' => 'Warrant',
            'descr' => 'Pelayanan kami mencakup LAYANAN SEWA di SELURUH WILAYAH INDONESIA, sebagai tujuan dan komitmen utama kami yaitu kebanggaan anda atas pelayanan kami dengan didukung dengan perangkat-perangkat terbaru dan didukung tenaga teknisi terbaik, kami akan selalu hadir dan mensukseskan acara anda.',
        ]);
    }
}
