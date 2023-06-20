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
            'level' => 'Intermediate',
            'name' => 'Sample Test',
            'overview' => 'Overview of the test',
            'content' => 'Test content goes here',
            'time' => '1 hour',
            'price' => '19.99',
            'language_id' => 2,
        ]);
    }
}
