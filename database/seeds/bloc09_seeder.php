<?php

use Illuminate\Database\Seeder;

class bloc09_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $block = new \App\ContentModels\Bloc09();

        $block->save();
    }
}
