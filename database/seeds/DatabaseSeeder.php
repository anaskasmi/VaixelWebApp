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
//         $this->call(driverSeeder::class);
//         $this->call(marketerSeeder::class);
//         $this->call(adminSeeder::class);
//         $this->call(investorSeeder::class);
         //content
         $this->call(question_categories_seeder::class);
         $this->call(question_seeder::class);
         $this->call(bloc01_seeder::class);
         $this->call(bloc02_seeder::class);
         $this->call(bloc03_seeder::class);
         $this->call(bloc04_seeder::class);
         $this->call(bloc05_seeder::class);
         $this->call(bloc06_seeder::class);
         $this->call(bloc07_seeder::class);
         $this->call(bloc08_seeder::class);
         $this->call(bloc09_seeder::class);
         $this->call(bloc10_seeder::class);
         $this->call(bloc11_seeder::class);
         $this->call(bloc12_seeder::class);
         $this->call(bloc13_seeder::class);
         $this->call(bloc14_seeder::class);
         $this->call(bloc15_seeder::class);
         $this->call(bloc16_seeder::class);



    }
}
