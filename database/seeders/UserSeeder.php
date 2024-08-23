<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'id' => 1,
            'full_name' => 'Vincent Chandra Trie Novan',
            'short_about' => 'My goal is to write maintainable code, innovative and user-friendly digital solutions. Eager to contribute to a dynamic team and continuously learn in the tech industry.',
            'role' => 'Web Developer',
            'about' => 'Recent graduate from Universitas Brawijaya with a degree in Information Systems, specialized in web development and UI design. Proficient in creating responsive and user-centric websites and applications. Driven by a passion for innovation, I am dedicated to delivering cutting-edge digital solutions that enhance user experiences. Eager to contribute to a dynamic team and continuously learn in the tech industry. 🚀',
            'cv' => null,
            'email' => 'vincentchaandra@gmail.com',
            'profile_pict' => 'profile-pict.png',
            'password' => Hash::make('password'),
        ]);
    }
}
