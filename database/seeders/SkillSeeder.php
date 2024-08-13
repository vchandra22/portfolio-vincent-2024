<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Skill::create([
            'id' => 1,
            'title' => 'Versatile Skill Set',
            'description' => 'As a full stack developer, I have expertise in both front-end and back-end technologies, allowing me to build comprehensive and scalable web applications.',
            'gambar' => 'M10 2h4v4h-4V2zM7 7h10v2h-2v13h-2v-6h-2v6H9V9H7V7zM5 5v2h2V5H5zm0 0H3V3h2v2zm14 0v2h-2V5h2zm0 0V3h2v2h-2z',
        ]);
        Skill::create([
            'id' => 2,
            'title' => 'Creative Design Solutions',
            'description' => 'I deliver visually appealing and user-friendly designs that enhance the overall user experience while aligning with modern design principles.',
            'gambar' => 'M12 3H8v2h4v2H2v2h12V3h-2zm10 8V7h-6v2h4v2H2v2h20v-2zM2 17v-2h14v6h-6v-2h4v-2H2z',
        ]);
        Skill::create([
            'id' => 3,
            'title' => 'Proven Problem-Solver',
            'description' => 'I excel at identifying and addressing complex technical challenges, ensuring smooth and efficient performance of web applications.',
            'gambar' => 'M12 1h2v8h8v4h-2v-2h-8V5h-2V3h2V1zM8 7V5h2v2H8zM6 9V7h2v2H6zm-2 2V9h2v2H4zm10 8v2h-2v2h-2v-8H2v-4h2v2h8v6h2zm2-2v2h-2v-2h2zm2-2v2h-2v-2h2zm0 0h2v-2h-2v2z',
        ]);
    }
}
