<?php

namespace Database\Seeders;

use App\Models\ListPerangkat;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Jalankan AdminUserSeeder
        $this->call(AdminUserSeeder::class);
         ListPerangkat::factory()->count(5)->create();
            $this->call([
        UserSeeder::class,
    ]);
    }
}
