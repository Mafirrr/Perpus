<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Member>
 */
class MemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => $this->faker->name,
            'jurusan' => $this->faker->randomElement(['Teknik Informatika', 'Sistem Informasi', 'Manajemen', 'Akuntansi']),
            'email' => $this->faker->unique()->safeEmail,
            'tanggal_lahir' => $this->faker->dateTimeBetween('-60 years', '-18 years')->format('Y-m-d'),
        ];
    }
}
