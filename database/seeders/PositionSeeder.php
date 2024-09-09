<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posisiPekerjaan = [
            [
                'position_name' => 'HR',
                'salary' => 7000000, // Ganti dengan nilai gaji yang sesuai
                'jobdesc' => 'Menangani sumber daya manusia.'
            ],
            [
                'position_name' => 'GA',
                'salary' => 5000000, // Ganti dengan nilai gaji yang sesuai
                'jobdesc' => 'Menangani kegiatan administrasi umum.'
            ],
            [
                'position_name' => 'Social Media Specialist',
                'salary' => 6500000, // Ganti dengan nilai gaji yang sesuai
                'jobdesc' => 'Menangani strategi dan implementasi media sosial.'
            ],
            [
                'position_name' => 'Digital Marketing',
                'salary' => 8000000, // Ganti dengan nilai gaji yang sesuai
                'jobdesc' => 'Bertanggung jawab atas strategi pemasaran digital.'
            ],
            [
                'position_name' => 'UI Designer',
                'salary' => 8500000, // Ganti dengan nilai gaji yang sesuai
                'jobdesc' => 'Merancang antarmuka pengguna.'
            ],
            [
                'position_name' => 'UX Designer',
                'salary' => 8500000, // Ganti dengan nilai gaji yang sesuai
                'jobdesc' => 'Merancang pengalaman pengguna.'
            ],
            [
                'position_name' => 'Front-End Developer',
                'salary' => 9000000, // Ganti dengan nilai gaji yang sesuai
                'jobdesc' => 'Mengembangkan bagian depan aplikasi web.'
            ],
            [
                'position_name' => 'Back-End Developer',
                'salary' => 10000000, // Ganti dengan nilai gaji yang sesuai
                'jobdesc' => 'Mengembangkan bagian belakang aplikasi web.'
            ],
        ];

        // Masukkan data ke dalam tabel posisi_pekerjaan
        DB::table('positions')->insert($posisiPekerjaan);
    }
}
