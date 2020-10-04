<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert(
            [
                [
                    'id' => 1,
                    'name' => 'Women welfare'
                ],
                [
                    'id' => 2,
                    'name' => 'Agriculture'
                ]
            ]
        );
    }
}
