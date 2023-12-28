<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('tests')->insert([
            ['id' => 1, 'level' => 'TELC', 'name' => 'TELC', 'overview' => 'Grands débutants et faux débutants...', 'content' => 'Le WiDaF (Deutsch als Fremdsprache in der Wirtschaft) est un diplôme d’allemand...', 'time' => '-', 'price' => '2000', 'features' => "\"[\\\"A\\\",\\\"B\\\",\\\"C\\\",\\\"D\\\"]\"", 'max_placements' => 8, 'language_id' => 2, 'image' => '1701131895-TELC.jpg', 'short_description' => '-', 'course_id' => 1, 'created_at' => '2023-07-19 17:40:55', 'updated_at' => '2023-11-28 00:38:15'],
            ['id' => 2, 'level' => 'DSH', 'name' => 'DSH', 'overview' => 'Grands débutants et faux débutants...', 'content' => 'Le test DSH (Deutsche Sprachprüfung für den Hochschulzugang) est un examen de compétence en langue allemande destiné aux étudiants internationaux...', 'time' => '-', 'price' => '1500', 'features' => "\"[\\\"A\\\",\\\"B\\\",\\\"C\\\",\\\"D\\\"]\"", 'max_placements' => 1, 'language_id' => 2, 'image' => '1693676624-DSH.jpg', 'short_description' => '-', 'course_id' => 5, 'created_at' => '2023-07-19 17:40:55', 'updated_at' => '2023-09-08 15:08:24'],
            ['id' => 3, 'level' => 'DAF', 'name' => 'DAF', 'overview' => 'Le test DAF (Deutsch als Fremdsprache) est un examen de compétence en langue allemande pour les apprenants non natifs...', 'content' => 'Le test DAF (Deutsch als Fremdsprache) est un examen de compétence en langue allemande pour les apprenants non natifs...', 'time' => '-', 'price' => '1500', 'features' => "\"[\\\"A\\\",\\\"B\\\",\\\"C\\\",\\\"D\\\"]\"", 'max_placements' => 1, 'language_id' => 2, 'image' => 'DAF.jpg', 'short_description' => '-', 'course_id' => 5, 'created_at' => '2023-07-19 17:40:55', 'updated_at' => '2023-09-02 15:20:30'],
        ]);
    }
}
