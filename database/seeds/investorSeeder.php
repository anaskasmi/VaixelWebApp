<?php

use Illuminate\Database\Seeder;

class investorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Investor::class,50)->create();

    }
}
