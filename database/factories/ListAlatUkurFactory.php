<?php

namespace Database\Factories;

use App\Models\ListAlatUkur;
use Illuminate\Database\Eloquent\Factories\Factory;

class ListAlatUkurFactory extends Factory
{
    protected $model = ListAlatUkur::class;

    public function definition(): array
    {
        return [
            'kode_region'     => 'RG001',
            'kode_alatukur'   => 'AT001',
            'kode_brand'      => 'BR001',
            'type'            => $this->faker->word(),
            'serialnumber'    => 'SN-' . rand(10000, 99999),
            'alatukur_ke'     => rand(1, 5),
            'tahunperolehan'  => rand(2015, 2025),
            'kondisi'         => $this->faker->randomElement(['Baik', 'Rusak', 'Perlu Kalibrasi']),
            'keterangan'      => $this->faker->sentence(),
            'milik'           => 1, // ID user
        ];
    }
}