<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [

            [
                'name' => 'Manajemen Koleksi Digital',
                'icon' => 'lni lni-book',
                'description' => 'Kelola data buku, ebook, dan jurnal secara digital dengan sistem yang terpusat dan mudah digunakan.',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Manajemen User Multi-Role',
                'icon' => 'lni lni-users',
                'description' => 'Pengelolaan user dengan peran berbeda seperti admin, pustakawan, dan member untuk akses yang terkontrol.',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'Peminjaman & Pengembalian Buku',
                'icon' => 'lni lni-exit-up',
                'description' => 'Pencatatan proses peminjaman dan pengembalian buku secara cepat dan akurat.',
                'order' => 3,
                'is_active' => true,
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
