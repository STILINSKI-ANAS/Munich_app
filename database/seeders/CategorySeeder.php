<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            [
                'id' => 1,
                'name' => 'Langues et Communication',
                'number' => 25,
                'image' => 'langues_et_communication.jpg',
                'created_at' => '2023-11-08 19:48:44',
                'updated_at' => '2023-11-08 19:48:44',
            ],
            [
                'id' => 2,
                'name' => 'Examens International',
                'number' => 30,
                'image' => 'examens_international.jpg',
                'created_at' => '2023-11-08 19:48:44',
                'updated_at' => '2023-11-08 19:48:44',
            ],
            [
                'id' => 3,
                'name' => 'Séjour Linguistique',
                'number' => 20,
                'image' => 'sejour_linguistique.jpg',
                'created_at' => '2023-11-08 19:48:44',
                'updated_at' => '2023-11-08 19:48:44',
            ],
            [
                'id' => 4,
                'name' => 'Orientation',
                'number' => 15,
                'image' => 'orientation.jpg',
                'created_at' => '2023-11-08 19:48:44',
                'updated_at' => '2023-11-08 19:48:44',
            ]
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
