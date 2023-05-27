<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\karyawan>
 */
class KaryawanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => fake()->name(),
            // 'harga' => fake()->numberBetween(30000, 120000),
            'jabatan' => fake()->name(),
            'tanggal_lahir' => fake()-> date($format = 'Y-m-d', $max = 'now'),
            'telp' => fake()->numberBetween(11946, 549504),
        ];
    }
}
