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
                'jumlah_tamu' => '1',
                'comment' => ''
            ],
            [
                'name' => 'Raihan Saputra',
                'code' => 'raihan12',
                'status' => null,
                'jumlah_tamu' => '2',
                'comment' => ''
            ],
            [
                'name' => 'Dewi Lestari',
                'code' => 'dewi88',
                'status' => null,
                'jumlah_tamu' => '1',
                'comment' => ''
            ],
            [
                'name' => 'Budi Santoso',
                'code' => 'budi45',
                'status' => null,
                'jumlah_tamu' => '1',
                'comment' => ''
            ],
            [
                'name' => 'Siti Aminah',
                'code' => 'siti99',
                'status' => null,
                'jumlah_tamu' => '1',
                'comment' => ''
            ],
            [
                'name' => 'Wina',
                'code' => 'wina99',
                'status' => null,
                'jumlah_tamu' => '1',
                'comment' => ''
            ],
            [
                'name' => 'dafa',
                'code' => 'dafa99',
                'status' => null,
                'jumlah_tamu' => '1',
                'comment' => ''
            ],
        ];

        foreach ($guests as $guest) {
            Guest::create($guest);
        }
    }
}
