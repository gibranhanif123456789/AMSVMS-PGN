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
            'kode_region'    => 'RG01',
            'kode_site'      => 'ST01',
            'no_rack'        => 'R01',
            'kode_perangkat' => 'PR' . $this->faker->unique()->numberBetween(1, 999),
            'perangkat_ke'   => $this->faker->numberBetween(1, 10),
            'kode_brand'     => 'BR01',
            'type'           => $this->faker->word(),
            'uawal'          => $this->faker->numberBetween(1, 20),
            'uakhir'         => $this->faker->numberBetween(21, 40),
            'milik'          => $this->faker->boolean(),
        ];
    }
}
