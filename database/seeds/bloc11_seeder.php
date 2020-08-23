<?php

use Illuminate\Database\Seeder;

class bloc11_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bloc = new \App\ContentModels\Bloc11();
        $bloc->main_title="VAIXEL MOBILE APP";
        $bloc->introduction_text="Download our mobile App and get to know more about our services and features
        Easy to use and available on both operating systems : iOS and Android";
        $bloc->CTA1_text="iOS";
        $bloc->CTA1_link="#";
        $bloc->CTA2_text="Android";
        $bloc->CTA2_link="#";
        $bloc->save();
    }
}
