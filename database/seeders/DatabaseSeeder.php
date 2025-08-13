<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Guest;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password'
        ]);

        $guests = [
            [
                'name' => 'Ammar Hanz',
                'code' => 'ammar23',
                'status' => null,
                'comment' => 'hallo'
            ],
            [
                'name' => 'Raihan Saputra',
                'code' => 'raihan12',
                'status' => null,
                'comment' => 'hallo'
            ],
            [
                'name' => 'Dewi Lestari',
                'code' => 'dewi88',
                'status' => null,
                'comment' => 'hallo'
            ],
            [
                'name' => 'Budi Santoso',
                'code' => 'budi45',
                'status' => null,
                'comment' => 'hallo'
            ],
            [
                'name' => 'Siti Aminah',
                'code' => 'siti99',
                'status' => null,
                'comment' => 'hallo'
            ],
            [
                'name' => 'Wina',
                'code' => 'wina99',
                'status' => null,
                'comment' => 'hallo'
            ],
            [
                'name' => 'dafa',
                'code' => 'dafa99',
                'status' => null,
                'comment' => 'hallo'
            ],
        ];

        foreach ($guests as $guest) {
            Guest::create($guest);
        }
    }
}
