<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class UserFactory extends Factory
{
    /**
     * Nama model yang terkait dengan factory ini.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Definisikan model baru yang akan dihasilkan.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,  // Menggunakan faker untuk menghasilkan nama
            'email' => $this->faker->unique()->safeEmail,  // Menghasilkan email unik
            'email_verified_at' => now(),  // Email diverifikasi langsung saat pembuatan
            'password' => bcrypt('password'),  // Menggunakan password bcrypt
            'remember_token' => Str::random(10),  // Token acak untuk remember_token
            'created_at' => now(),  // Timestamp untuk created_at
            'updated_at' => now(),  // Timestamp untuk updated_at
        ];
    }
}
