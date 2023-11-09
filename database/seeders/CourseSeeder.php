<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('courses')->insert([
            [
                'id' => 1,
                'level' => 'Niveau A1',
                'overview' => 'Grands débutants et faux débutants...',
                'content' => 'Course content',
                'time' => '-',
                'image' => 'A1.jpg',
                'price' => '500',
                'created_at' => '2023-07-15 18:45:19',
                'updated_at' => '2023-07-15 18:45:19',
                'language_id' => 2,
            ],
            [
                'id' => 2,
                'level' => 'Niveau B1',
                'overview' => 'Stagiaires ayant suivi le module A2 ou personnes maîtrisant déjà les éléments de base du langage courant...',
                'content' => 'Course content',
                'time' => '-',
                'image' => 'B1.jpg',
                'price' => '500',
                'created_at' => '2023-07-15 18:45:19',
                'updated_at' => '2023-07-15 18:45:19',
                'language_id' => 2,
            ],
            [
                'id' => 3,
                'level' => 'Niveau B2',
                'overview' => 'Stagiaires ayant suivi le module 2 ou personnes ayant déjà une bonne maîtrise de la langue...',
                'content' => 'Course content',
                'time' => '-',
                'image' => 'B2.jpg',
                'price' => '500',
                'created_at' => '2023-07-15 19:20:50',
                'updated_at' => '2023-07-15 19:20:50',
                'language_id' => 2,
            ],
            [
                'id' => 4,
                'level' => 'Niveau C1',
                'overview' => 'L’intéressé a la capacité d’user, dans son quotidien et son travail, d’un niveau comparable à quelqu’un dont la langue est maternelle...',
                'content' => 'Course content',
                'time' => '-',
                'image' => 'C1.jpg',
                'price' => '500',
                'created_at' => '2023-07-15 19:43:01',
                'updated_at' => '2023-07-15 19:43:01',
                'language_id' => 2,
            ],
            // Add additional course records here
        ]);
    }
}
