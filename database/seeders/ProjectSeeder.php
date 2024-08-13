<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
            'id' => 1,
            'title' => 'SIGMA Platform',
            'slug' => 'sigma-platform',
            'short_description' => 'a platform for monitoring internship program at KOMINFO Blitar City',
            'content' => 'test',
            'gambar' => 'sigma-project-img.png',
            'meta_title' => null,
            'meta_description' => null,
            'meta_keyword' => null,
            'og_image' => null,
        ]);
    }
}
