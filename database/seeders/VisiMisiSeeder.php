<?php

namespace Database\Seeders;

use App\Models\VisiMisi;
use Illuminate\Database\Seeder;

class VisiMisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        VisiMisi::insert([
            'visi' => 'Menjadi salah satu Program Studi di Sumatera Selatan yang unggul dibidang teknik elektro khususnya sistem kontrol dan berbasis Teknologi Informasi berstandar internasional pada tahun 2025.',
            'misi' => 'Melaksanakan sistem pendidikan interaktif yang didukung fasilitas e-learning untuk menghasilkan sarjana berkualitas yang siap bersaing pada pasar global dalam menyelesaikan masalah kelistrikan;
            Menciptakan suasana akademik yang produktif bercirikan keterbukaan, kebersamaan dan berkesempatan mengembangkan kewirausahaan yang profesional dibidangnya;
            Mengembangkan kegiatan penelitian dan pengabdian kepada masyarakat untuk menghasilkan karya akademik serta memberikan solusi masalah yang terjadi dibidang teknik elektro.'
        ]);
    }
}
