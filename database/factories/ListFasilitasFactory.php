<?php

namespace Database\Factories;

use App\Models\ListFasilitas;
use Illuminate\Database\Eloquent\Factories\Factory;

class ListFasilitasFactory extends Factory
{
    protected $model = ListFasilitas::class;

    public function definition(): array
    {
        return [
            'nama_fasilitas' => $this->faker->words(2, true),
            'kode_fasilitas' => 'FAC-' . rand(1000, 9999),
            'jenis_fasilitas' => $this->faker->randomElement(['AC', 'Lampu', 'Pintu', 'Jendela', 'Lift']),
            'lokasi' => $this->faker->randomElement(['Lantai 1', 'Lantai 2', 'Ruang Server', 'Ruang Meeting']),
            'tanggal_pemasangan' => $this->faker->date(),
            'deskripsi' => $this->faker->sentence(),
        ];
    }
}