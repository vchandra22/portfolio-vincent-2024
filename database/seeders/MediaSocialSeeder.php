<?php

namespace Database\Seeders;

use App\Models\MediaSocial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MediaSocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MediaSocial::create([
            'id' => 1,
            'title' => 'vchandra22',
            'link' => 'https://github.com/vchandra22',
            'gambar' => 'mdi_github.png',
        ]);
    }
}
