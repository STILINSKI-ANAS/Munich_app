<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Get a language for the course (assuming you have at least one language seeded)
        $language = Language::first();

        // Check if a language was found
        if (!$language) {
            // If no language was found, create a new language
            $language = Language::create([
                'name' => 'French',
                'image' => null,
                'description' => 'French language description',
            ]);
        }

        Course::create([
            'level' => 'Niveau A1',
            'overview' => 'Introduction to the course',
            'content' => 'Course content for beginners',
            'time' => '2 hours',
            'image' => 'course1.jpg',
            'price' => 29.99,
            'language_id' => $language->id,
        ]);

        Course::create([
            'level' => 'Niveau B1',
            'overview' => 'Intermediate course overview',
            'content' => 'Course content for intermediate learners',
            'time' => '3 hours',
            'image' => 'course2.jpg',
            'price' => 39.99,
            'language_id' => $language->id,
        ]);

        Course::create([
            'level' => 'Niveau B2',
            'overview' => 'Intermediate course overview',
            'content' => 'Course content for intermediate learners',
            'time' => '3 hours',
            'image' => 'course2.jpg',
            'price' => 39.99,
            'language_id' => $language->id,
        ]);

        Course::create([
            'level' => 'Niveau C1',
            'overview' => 'Intermediate course overview',
            'content' => 'Course content for intermediate learners',
            'time' => '3 hours',
            'image' => 'course2.jpg',
            'price' => 39.99,
            'language_id' => $language->id,
        ]);
    }
}
