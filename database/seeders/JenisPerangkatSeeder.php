<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\JenisPerangkat;

class JenisPerangkatSeeder extends Seeder
{
    public function run()
    {
        JenisPerangkat::create([
            'kode_perangkat' => 'JP-SVR',
            'nama_perangkat' => 'Server'
        ]);

        JenisPerangkat::create([
            'kode_perangkat' => 'JP-SWT',
            'nama_perangkat' => 'Switch'
        ]);

        JenisPerangkat::create([
            'kode_perangkat' => 'JP-UPS',
            'nama_perangkat' => 'UPS'
        ]);
    }
}