<?php

use Illuminate\Database\Seeder;

class bloc14_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bloc = new \App\ContentModels\Bloc14();
        $bloc->main_title="Roadmap";
        $bloc->introduction_text="Our platform helps make effective on-vehicle advertising by means of a mobile application. You can manage your campaign in real-time and track the effectiveness of your advertising. Put on your belt, and get to know more about our journey !
";

        $bloc->card1_date="";
        $bloc->card1_title="";
        $bloc->card1_text="";

        $bloc->card2_date="";
        $bloc->card2_title="";
        $bloc->card2_text="";

        $bloc->card3_date="";
        $bloc->card3_title="";
        $bloc->card3_text="";

        $bloc->card4_date="";
        $bloc->card4_title="";
        $bloc->card4_text="";
        $bloc->save();
    }
}
