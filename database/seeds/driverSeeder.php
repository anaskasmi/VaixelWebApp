<?php

use Illuminate\Database\Seeder;

class driverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Driver::class,50)->create();

    }
}
