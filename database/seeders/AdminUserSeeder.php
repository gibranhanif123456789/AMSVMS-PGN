<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Buat user admin
        User::updateOrCreate(
            ['email' => 'admin@ams.com'],
            [
                'name' => 'Admin AMS',
                'password' => Hash::make('password123'),
                'role' => 1,
                'region' => 'BTM',
                'perusahaan' => 'PGNCOM',
                'bagian' => 'Pengawas',
                'email_verified_at' => now(),
            ]
        );

        // Buat user biasa (opsional)
        User::updateOrCreate(
            ['email' => 'user@ams.com'],
            [
                'name' => 'User Biasa',
                'password' => Hash::make('password123'),
                'role' => 3,
                'region' => 'BTM',
                'perusahaan' => 'PGNCOM',
                'email_verified_at' => now(),
            ]
        );

        User::updateOrCreate(
            ['email' => 'user2@ams.com'],
            [
                'name' => 'User Biasa juga',
                'password' => Hash::make('password123'),
                'role' => 3,
                'region' => 'BTM',
                'perusahaan' => 'PGNCOM',
                'email_verified_at' => now(),
            ]
        );

        // Tampilkan info
        $this->command->info('User admin@ams.com dan user@ams.com berhasil dibuat.');
    }
}