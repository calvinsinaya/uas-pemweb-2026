<?php

namespace Database\Seeders;

use App\Models\Cta;
use Illuminate\Database\Seeder;

class CtaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cta::create([
            'section_key'  => 'cta_main',
            'title'        => 'Siap Beralih ke Perpustakaan Digital?',
            'description'  => 'Kelola koleksi buku, kategori, dan peminjaman secara digital dengan sistem perpustakaan berbasis web yang cepat, aman, dan mudah digunakan.',
            'button_text'  => 'Jelajahi Sekarang',
            'button_link'  => '#services',
            'is_active'    => true,
        ]);
    }
}
