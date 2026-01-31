<?php

namespace Database\Seeders;

use App\Models\Hero;
use Illuminate\Database\Seeder;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Hero::firstOrCreate([
            'title' => 'Sistem Perpustakaan Digital Modern',
            'description' => 'Aplikasi perpustakaan berbasis web yang memudahkan pengelolaan koleksi buku, kategori, dan peminjaman secara terpusat. Cepat, efisien, dan mudah digunakan.',
            'button_text' => 'Jelajahi Koleksi',
            'button_link' => '/login',
            'image' => null,
        ]);
    }
}
