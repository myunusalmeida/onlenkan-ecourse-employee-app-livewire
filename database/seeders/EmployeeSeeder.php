<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employees = [
            [
                'nip' => '123456789',
                'name' => 'John Doe',
                'birth_place' => 'Jakarta',
                'birth_date' => '1990-01-01',
                'phone' => '08123456789',
                'position_id' => 1,
                'join_date' => '2022-01-01',
            ],
            [
                'nip' => '987654321',
                'name' => 'Jane Doe',
                'birth_place' => 'Surabaya',
                'birth_date' => '1992-02-02',
                'phone' => '08765432109',
                'position_id' => 2,
                'join_date' => '2022-02-01',
            ],
            // ... tambahkan data lainnya sesuai kebutuhan
        ];

        // Masukkan data ke dalam tabel employees
        DB::table('employees')->insert($employees);
    }
}
