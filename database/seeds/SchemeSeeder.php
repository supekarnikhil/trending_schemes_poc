<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('scheme')->insert(
            [
                [
                    'id' => 1,
                    'category_id' => 1,
                    'name' => 'Cash Transfer to Women PMJDY account holders_MH_Covid-19'
                ],
                [
                    'id' => 2,
                    'category_id' => 1,
                    'name' => 'Beti Bachao, Beti Padhao'
                ],
                [
                    'id' => 3,
                    'category_id' => 1,
                    'name' => 'One Stop Centre Scheme'
                ],
                [
                    'id' => 4,
                    'category_id' => 1,
                    'name' => 'Working Women Hostels'
                ],
                [
                    'id' => 5,
                    'category_id' => 1,
                    'name' => 'Nari Shakti Puruskars'
                ],
                [
                    'id' => 6,
                    'category_id' => 2,
                    'name' => 'Pradhan Mantri Kisan Maandhan yojana'
                ],
                [
                    'id' => 7,
                    'category_id' => 2,
                    'name' => 'Soil Health Card Scheme'
                ],
                [
                    'id' => 8,
                    'category_id' => 2,
                    'name' => 'Paramparagat Krishi Vikas Yojana'
                ],
                [
                    'id' => 9,
                    'category_id' => 2,
                    'name' => 'Pradhan Mantri Krishi Sinchai Yojana'
                ]
            ]
        );
    }
}
