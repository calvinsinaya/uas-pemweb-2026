<?php

namespace Database\Seeders;

use App\Models\Pricing;
use Illuminate\Database\Seeder;

class PricingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pricing::updateOrCreate(
            ['section_key' => 'pricing_main'],
            [
                'small_title' => 'Pricing',
                'title' => 'Pricing & Plans',
                'description' => 'Pilihan paket layanan sistem perpustakaan digital sesuai kebutuhan anda.',
                'plans' => [
                    [
                        'name' => 'Basic',
                        'description' => 'Cocok untuk perpustakaan kecil',
                        'price' => 0,
                        'currency' => '$',
                        'duration' => '/month',
                        'featured' => false,
                        'features' => [
                            ['text' => 'Manajemen buku dasar', 'active' => true],
                            ['text' => 'Manajemen kategori', 'active' => true],
                        ],
                    ],
                    [
                        'name' => 'Standard',
                        'description' => 'Paket paling populer',
                        'price' => 20,
                        'currency' => '$',
                        'duration' => '/month',
                        'featured' => true,
                        'features' => [
                            ['text' => 'Manajemen buku & kategori', 'active' => true],
                            ['text' => 'Manajemen user multi-role', 'active' => true],
                            ['text' => 'Peminjaman & pengembalian buku', 'active' => true],
                        ],
                    ],
                    [
                        'name' => 'Premium',
                        'description' => 'Solusi lengkap perpustakaan digital',
                        'price' => 50,
                        'currency' => '$',
                        'duration' => '/unlimited',
                        'featured' => false,
                        'features' => [
                            ['text' => 'Semua fitur Standard', 'active' => true],
                            ['text' => 'Support prioritas', 'active' => true],
                            ['text' => 'Akses tanpa batas', 'active' => true],
                        ],
                    ],
                ],
            ]
        );
    }
}
