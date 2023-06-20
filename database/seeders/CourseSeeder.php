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

        Course::create([
            'level' => 'Beginner',
            'overview' => 'Introduction to the course',
            'content' => 'Course content for beginners',
            'time' => '2 hours',
            'image' => 'course1.jpg',
            'price' => 29.99,
            'language_id' => $language->id,
        ]);

        Course::create([
            'level' => 'Intermediate',
            'overview' => 'Intermediate course overview',
            'content' => 'Course content for intermediate learners',
            'time' => '3 hours',
            'image' => 'course2.jpg',
            'price' => 39.99,
            'language_id' => $language->id,
        ]);
    }
}
