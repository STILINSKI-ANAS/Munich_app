<?php

namespace Database\Seeders;

use App\Models\Test;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Test::create([
            'level' => 'DAF',
            'name' => 'TOEFL',
            'overview' => 'TOEFL Test Overview',
            'content' => 'TOEFL Test Content',
            'features' => "[\"\u00c9valuation ax\u00e9e sur le monde des affaires\",\"Reconnaissance par les entreprises et les institutions\",\"\u00c9valuation normalis\u00e9e\",\"Comparabilit\u00e9 internationale\",\"D\u00e9veloppement personnel et professionnel\"]",
            'time' => '4 hours',
            'price' => '100.00',
            'image' => 'DAF.jpg',
            'short_description' => 'This is an intermediate level test.',
            'language_id' => 2,
        ]);

        Test::create([
            'level' => 'WIDAF',
            'name' => 'TOEIC',
            'overview' => 'TOEIC Test Overview',
            'content' => 'TOEIC Test Content',
            'features' => "[\"\u00c9valuation ax\u00e9e sur le monde des affaires\",\"Reconnaissance par les entreprises et les institutions\",\"\u00c9valuation normalis\u00e9e\",\"Comparabilit\u00e9 internationale\",\"D\u00e9veloppement personnel et professionnel\"]",
            'time' => '2 hours',
            'price' => '75.00',
            'image' => 'WIDAF.jpg',
            'short_description' => 'This is an advanced level test.',
            'language_id' => 2,
        ]);

        Test::create([
            'level' => 'DSH',
            'name' => 'TELC',
            'overview' => 'TELC Test Overview',
            'content' => 'TELC Test Content',
            'features' => "[\"\u00c9valuation ax\u00e9e sur le monde des affaires\",\"Reconnaissance par les entreprises et les institutions\",\"\u00c9valuation normalis\u00e9e\",\"Comparabilit\u00e9 internationale\",\"D\u00e9veloppement personnel et professionnel\"]",
            'time' => '2 hours',
            'price' => '80.00',
            'image' => 'ita.jpg',
            'short_description' => 'This is a test offered by TELC.',
            'language_id' => 2,
        ]);
    }
}
