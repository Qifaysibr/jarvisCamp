<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tugas>
 */
class TugasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'Mata Kuliah' => fake()->name(),
            'Kelas' => "R2Z",
            'Jadwal' => "2024-08-10",
            'Pengajar' => fake()->name(),
            'No HP Pengajar' => fake()->phoneNumber(),
        ];
    }
}
