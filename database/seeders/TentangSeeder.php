<?php

namespace Database\Seeders;

use App\Models\Tentang;
use Illuminate\Database\Seeder;

class TentangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tentang::insert([
            'konten_tentang' => 'Program studi ini bertujuan menghasilkan lulusan yang berkompeten di bidang elektro seperti: elektro seperti: robotika, pemeliaharaan peralatan elektronika, system control serta ditunjang kemampuan soft skill lainnya. Total sks yang ditempuh untuk menyelesaikan studi yaitu 146 sks dengan masa studi 4,5 tahun.'
        ]);
    }
}
