<?php

namespace Database\Factories;

use App\Models\ListPerangkat;
use Illuminate\Database\Eloquent\Factories\Factory;

class ListPerangkatFactory extends Factory
{
    protected $model = ListPerangkat::class;

    public function definition(): array
    {
        return [
            'nama_perangkat' => $this->faker->sentence(),
            'deskripsi' => $this->faker->paragraph(),
        ];
    }
}