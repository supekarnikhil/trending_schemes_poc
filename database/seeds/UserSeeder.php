<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert(
            [
                [
                    'id'            => 1,
                    'name'          => 'Nikhil',
                    'email_id'      => 'supekarnikhil.job@gmail.com',
                    'phone_number'  => '9876543210',
                    'state_id'      => 27
                ]
            ]
        );
    }
}
