<?php

namespace Database\Seeders;

use App\Models\Test;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('tests')->insert([
            [
                'id' => 1,
                'level' => 'WIDAF',
                'name' => 'WIDAF',
                'overview' => 'Grands débutants et faux débutants...',
                'content' => 'Le WiDaF (Deutsch als Fremdsprache in der Wirtschaft) est un diplôme d’allemand...',
                'time' => '-',
                'price' => '1500',
                'max_placements' => '100',
                'features' => '"[\"\u00c9valuation ax\u00e9e sur le monde des affaires\",\"Reconnaissance par les entreprises et les institutions\",\"\u00c9valuation normalis\u00e9e\",\"Comparabilit\u00e9 internationale\",\"D\u00e9veloppement personnel et professionnel\"]"',
                'created_at' => '2023-07-19 18:40:55',
                'updated_at' => '2023-07-19 18:40:55',
                'language_id' => 2,
                'image' => 'WIDAF.jpg',
                'short_description' => '-',
                'course_id' => 1,
            ],
            [
                'id' => 2,
                'level' => 'DSH',
                'name' => 'DSH',
                'overview' => 'Grands débutants et faux débutants...',
                'content' => 'Le test DSH (Deutsche Sprachprüfung für den Hochschulzugang) est un examen de compétence en langue allemande destiné aux étudiants internationaux...',
                'time' => '-',
                'price' => '1500',
                'max_placements' => '100',
                'features' => '"[\"\\u00c9valuation ax\\u00e9e sur le monde des affaires\",\"Reconnaissance par les entreprises et les institutions\",\"\\u00c9valuation normalis\\u00e9e\",\"Comparabilit\\u00e9 internationale\",\"D\\u00e9veloppement personnel et professionnel\"]"',
                'created_at' => '2023-07-19 18:40:55',
                'updated_at' => '2023-09-08 16:08:24',
                'language_id' => 2,
                'image' => '1693676624-DSH.jpg',
                'short_description' => '-',
                'course_id' => 2,
            ],
            [
                'id' => 3,
                'level' => 'DAF',
                'name' => 'DAF',
                'overview' => 'Le test DAF (Deutsch als Fremdsprache) est un examen de compétence en langue allemande pour les apprenants non natifs...',
                'content' => 'Le test DAF (Deutsch als Fremdsprache) est un examen de compétence en langue allemande pour les apprenants non natifs...',
                'time' => '-',
                'price' => '1500',
                'max_placements' => '100',
                'features' => '"[\"\\u00c9valuation ax\\u00e9e sur le monde des affaires\",\"Reconnaissance par les entreprises et les institutions\",\"\\u00c9valuation normalis\\u00e9e\",\"Comparabilit\\u00e9 internationale\",\"D\\u00e9veloppement personnel et professionnel\"]"',
                'created_at' => '2023-07-19 18:40:55',
                'updated_at' => '2023-09-02 16:20:30',
                'language_id' => 2,
                'image' => 'DAF.jpg',
                'short_description' => '-',
                'course_id' => 2,
            ],
            // Add additional test records here
        ]);
    }
}
