<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(StateSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(SchemeSeeder::class);
        $this->call(UserSeeder::class);
    }
}
