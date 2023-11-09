<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('languages')->insert([
            [
                'id' => 1,
                'name' => 'English',
                'description' => 'English Language',
                'image' => 'English.jpg',
                'created_at' => '2023-07-15 19:45:06',
                'updated_at' => '2023-07-15 19:45:06',
            ],
            [
                'id' => 2,
                'name' => 'Allemand',
                'description' => 'Allemand Language',
                'image' => 'Allemand.jpg',
                'created_at' => '2023-07-15 19:45:06',
                'updated_at' => '2023-07-15 19:45:06',
            ],
            [
                'id' => 5,
                'name' => 'French',
                'description' => 'French languague course',
                'image' => 'French.jpg',
                'created_at' => '2023-07-12 18:00:44',
                'updated_at' => '2023-07-12 18:00:44',
            ],
            // Add additional language records here
        ]);

        //
    }
}
