<?php

namespace Database\Seeders;

use App\Models\TechStack;
use Illuminate\Database\Seeder;

class TechStackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TechStack::create([
            'id' => 1,
            'gambar' => 'akar-icons_php-fill.png'
        ]);
    }
}
