<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('courses')->insert([
            ['id' => 1, 'level' => 'Preparation TELC (en ligne)', 'overview' => '20 lessons + 10LMS', 'content' => '20 lessons + 10LMS', 'time' => '-', 'image' => '1701132031-TELC.jpg', 'max_placements' => null, 'price' => '1350', 'language_id' => 2, 'created_at' => '2023-07-15 17:45:19', 'updated_at' => '2023-12-23 23:39:20'],
            ['id' => 5, 'level' => 'Allemand A1', 'overview' => 'Institut Munich d\'Agadir propose des cours d\'allemand avec un apprentissage axé sur les objectifs et une formation linguistique efficace en allemand langue étrangère. Nous proposons divers types de cours d\'allemand pour vous aider à améliorer vos compétences linguistiques générales en allemand, y compris la grammaire, la phonétique allemande et la prononciation, la compréhension auditive, l\'expression orale et la production écrite.', 'content' => '', 'time' => '-', 'image' => '1702419300-A1.jpg', 'max_placements' => 100, 'price' => '900', 'language_id' => 2, 'created_at' => '2023-12-12 21:14:08', 'updated_at' => '2023-12-12 22:15:00'],
            ['id' => 6, 'level' => 'Allemand A2', 'overview' => 'Institut Munich d\'Agadir propose des cours d\'allemand avec un apprentissage axé sur les objectifs et une formation linguistique efficace en allemand langue étrangère. Nous proposons divers types de cours d\'allemand pour vous aider à améliorer vos compétences linguistiques générales en allemand, y compris la grammaire, la phonétique allemande et la prononciation, la compréhension auditive, l\'expression orale et la production écrite.', 'content' => '', 'time' => '-', 'image' => '1702419300-A1.jpg', 'max_placements' => 100, 'price' => '900', 'language_id' => 2, 'created_at' => '2023-12-12 21:14:08', 'updated_at' => '2023-12-12 22:15:00'],
            ['id' => 7, 'level' => 'Allemand B1', 'overview' => 'Institut Munich d\'Agadir propose des cours d\'allemand avec un apprentissage axé sur les objectifs et une formation linguistique efficace en allemand langue étrangère. Nous proposons divers types de cours d\'allemand pour vous aider à améliorer vos compétences linguistiques générales en allemand, y compris la grammaire, la phonétique allemande et la prononciation, la compréhension auditive, l\'expression orale et la production écrite.', 'content' => '', 'time' => '-', 'image' => '1702419300-A1.jpg', 'max_placements' => 100, 'price' => '900', 'language_id' => 2, 'created_at' => '2023-12-12 21:14:08', 'updated_at' => '2023-12-12 22:15:00'],
            ['id' => 8, 'level' => 'Allemand B2', 'overview' => 'Institut Munich d\'Agadir propose des cours d\'allemand avec un apprentissage axé sur les objectifs et une formation linguistique efficace en allemand langue étrangère. Nous proposons divers types de cours d\'allemand pour vous aider à améliorer vos compétences linguistiques générales en allemand, y compris la grammaire, la phonétique allemande et la prononciation, la compréhension auditive, l\'expression orale et la production écrite.', 'content' => '', 'time' => '-', 'image' => '1702419300-A1.jpg', 'max_placements' => 100, 'price' => '900', 'language_id' => 2, 'created_at' => '2023-12-12 21:14:08', 'updated_at' => '2023-12-12 22:15:00'],
            // Additional courses go here...
        ]);
    }
}
