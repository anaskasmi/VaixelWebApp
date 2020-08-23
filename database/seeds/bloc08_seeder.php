<?php

use Illuminate\Database\Seeder;

class bloc08_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bloc = new \App\ContentModels\Bloc08();
        $bloc->main_title="Our Service";
        $bloc->introduction_text="We believe that the future is owned by brands who adapt quickly, strive for first place, and embrace being different. With cities now relying on rideshare cars for mass transportation, a new global class of vehicles has been created that gives advertisers a new way of reaching their audience";
        $bloc->title1="For Drivers";
        $bloc->title2="For Brands";
        $bloc->save();
    }
}
