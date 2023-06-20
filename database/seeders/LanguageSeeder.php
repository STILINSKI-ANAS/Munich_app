<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Language::create([
            'name' => 'English',
            'description' => 'English Language',
            'Image' => 'english.jpg',
        ]);

        Language::create([
            'name' => 'Spanish',
            'description' => 'Spanish Language',
            'Image' => 'spanish.jpg',
        ]);
        //
    }
}
