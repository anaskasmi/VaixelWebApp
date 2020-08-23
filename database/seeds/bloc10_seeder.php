<?php

use Illuminate\Database\Seeder;

class bloc10_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bloc = new \App\ContentModels\Bloc10();
        $bloc->main_title="White paper";
        $bloc->introduction_text="Whether you’re a driver or a brand, get to know more about our how you can optimize your campaign (brand side), and earn more money (driver).";
        $bloc->title="Read the Whitepaper";
        $bloc->text="Vaixel, helps you precise geographical targeting, with large and creative graphics for maximum visual impact, all while being data-driven and trackable. If you’re a driver, you get each month, to have a bonus income, and the more you’re faithful to the driving process, the more you earn money !";
        $bloc->CTA="Download now";
        $bloc->save();
    }
}
