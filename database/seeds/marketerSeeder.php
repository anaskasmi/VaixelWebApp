<?php

use Illuminate\Database\Seeder;

class marketerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Marketer::class,50)->create();

    }
}
