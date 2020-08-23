<?php

use Illuminate\Database\Seeder;

class bloc16_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bloc = new \App\ContentModels\Bloc16();
        $bloc->title="FAQs";
        $bloc->text="Want to know more about Vaixel ? See our Frequently Asked Questions";

        $bloc->save();
    }
}
