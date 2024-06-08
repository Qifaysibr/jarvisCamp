<?php

namespace Database\Seeders;

use App\Models\Tugas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Tugas::create([
            'Mata Kuliah' => "Pemograman",
            'Kelas' => "R2Z",
            'Jadwal' => "2024-08-10",
            'Pengajar' => "Solahudin M.Pd",
            'No HP Pengajar' => "085423761254"
        ]);

        Tugas::factory(3)->create();
    }
}
