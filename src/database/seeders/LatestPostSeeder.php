<?php

namespace Database\Seeders;

use App\Models\LatestPost;
use Illuminate\Database\Seeder;

class LatestPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LatestPost::insert([
            [
                'title' => 'Digitalisasi Sistem Perpustakaan',
                'excerpt' => 'Sistem perpustakaan digital membantu mempercepat pengelolaan koleksi dan meningkatkan efisiensi layanan.',
                'author' => 'Admin',
                'published_at' => now(),
                'is_active' => true,
            ],
            [
                'title' => 'Manfaat Laravel Filament dalam Perpustakaan',
                'excerpt' => 'Lara
