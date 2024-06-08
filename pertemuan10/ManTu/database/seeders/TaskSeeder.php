<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Task::create([
            'name' => "Tugas MTk",
            'deadline' => "2024-08-05",
            'status' => "Belum Di Kerjakan",
            'description' => "ini tugas mtk"
        ]);

        Task::factory(5)->create();
    }
}
