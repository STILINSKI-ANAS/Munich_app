<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaiementTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('paiements')->insert([
            'id' => 1,
            'oid' => '00-00-00-0',
            'status' => 'sorti etape paiment',
            'amount' => '0.00',
            'date' => '2023-12-23',
            'etudiant_id' => null,
            'test_id' => null,
            'course_id' => null,
            'paymentable_id' => 1,
            'paymentable_type' => 'App\\Models\\EtudiantTest',
            'created_at' => '2023-12-23 23:37:11',
            'updated_at' => '2023-12-23 23:37:53',
        ]);
    }
}
