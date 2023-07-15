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
                'name' => 'Langues et Communication',
                'number' => 25,
                'image' => 'langues_et_communication.jpg',
            ],
            [
                'name' => 'Examens International',
                'number' => 30,
                'image' => 'examens_international.jpg',
            ],
            [
                'name' => 'Séjour Linguistique',
                'number' => 20,
                'image' => 'sejour_linguistique.jpg',
            ],
            [
                'name' => 'Orientation',
                'number' => 15,
                'image' => 'orientation.jpg',
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
