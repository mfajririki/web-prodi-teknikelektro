<?php

namespace Database\Seeders;

use App\Models\Tujuans;
use Illuminate\Database\Seeder;

class TujuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tujuans::insert([
            'konten_tujuan' => 'Tujuan Program Studi Untuk Bidang Pendidikan dan Pengajaran:

            Menghasilkan lulusan yang unggul, kreatif dan profesional yang mampu bersaing dibidang pengkajian teknik elektro dengan memanfaatkan teknologi informas
            Menghasilkan lulusan yang memiliki jiwa kewirausahaan di bidang teknik elektro.
            Tujuan Program Studi Untuk Bidang Penelitian:
            
            Mengembangkan keilmuan dibidang teknik elektro untuk menghasilkan produk penelitian yang dapat diterapkan didunia kerja dan masyarakat.
            
            Tujuan Program Studi Untuk Bidang Pengabdian Masyarakat
            
            Memberikan informasi dan solusi dalam menyelesaikan permasalahan dibidang teknik elektro untuk meningkatkan kesejahteraan masyarakat.
            
            Strategi pencapaian keberhasilan penerapan visi, misi, tujuan dan sasaran ditentukan untuk kurun waktu sebelas (11) tahun dari tahun 2014 hingga 2025 dengan pembagian sebagai berikut :
            
            Satu (1) tahun pertama difokuskan pada perbaikan kualitas yang menyangkut akreditasi program studi, penelitian dan pengabdian masyarakat.
            Setiap dua (2) tahun berikutnya prodi mengevaluasi setiap masalah yang telah dilalui sampai tahun Pencapaian difokuskan pada pendidikan dan pengajaran, prestasi penelitian, pengabdian kepada masyarakat, dan bidang kemahasiswaan.'
        ]);
    }
}
