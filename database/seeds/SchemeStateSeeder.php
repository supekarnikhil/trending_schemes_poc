<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchemeStateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('results')->insert(
            [
                [
                    'studentId' => 1,
                    'subjectId' => 1,
                    'marks' => 30,
                ],
                [
                    'studentId' => 1,
                    'subjectId' => 2,
                    'marks' => 15,
                ],
                [
                    'studentId' => 1,
                    'subjectId' => 3,
                    'marks' => 90,
                ],
                [
                    'studentId' => 2,
                    'subjectId' => 1,
                    'marks' => 90,
                ],
                [
                    'studentId' => 2,
                    'subjectId' => 2,
                    'marks' => 75,
                ],
                [
                    'studentId' => 2,
                    'subjectId' => 3,
                    'marks' => 92,
                ],
                [
                    'studentId' => 3,
                    'subjectId' => 4,
                    'marks' => 70,
                ],
                [
                    'studentId' => 3,
                    'subjectId' => 5,
                    'marks' => 68,
                ],
                [
                    'studentId' => 3,
                    'subjectId' => 6,
                    'marks' => 67,
                ],
                [
                    'studentId' => 4,
                    'subjectId' => 7,
                    'marks' => 45,
                ],
                [
                    'studentId' => 4,
                    'subjectId' => 8,
                    'marks' => 39,
                ],
                [
                    'studentId' => 4,
                    'subjectId' => 9,
                    'marks' => 69,
                ],
                [
                    'studentId' => 5,
                    'subjectId' => 7,
                    'marks' => 15,
                ],
                [
                    'studentId' => 5,
                    'subjectId' => 8,
                    'marks' => 77,
                ],
                [
                    'studentId' => 5,
                    'subjectId' => 9,
                    'marks' => 90,
                ],
            ]
        );
    }
}
