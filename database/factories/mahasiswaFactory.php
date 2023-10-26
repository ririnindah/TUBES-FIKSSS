<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\mahasiswa>
 */
class mahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'email' => fake()->unique()->safeEmail(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'nim' => $this->faker->numberBetween(1, 9999),
            'nama'=> $this->faker->name,
            'status'=> $this->faker->randomElement(['Aktif','Cuti', 'Mangkir', 'DO', 'Undur Diri']),
            'angkatan'=>$this->faker->randomElement(['17', '18', '19', '20', '21', '22', '23']),
            'jalur_masuk'=>$this->faker->randomElement(['SNMPTN', 'SBMPTN', 'Mandiri', 'SPBUB']),
            'provinsi'=>$this->faker->state,
            'kabupaten'=>$this->faker->city,
            'alamat'=>$this->faker->address,
            'foto'=>$this->faker->text(10),
            'remember_token' => Str::random(10),
        ];
    }
}
