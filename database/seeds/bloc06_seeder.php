<?php

use Illuminate\Database\Seeder;

class bloc06_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bloc = new \App\ContentModels\Bloc06();
        $bloc->main_title = "Problems and Opportunities";
        $bloc->introduction_text = "";
        $bloc->title1 = "Problems";
        $bloc->text1 = "The major problems that companies face when advertising
        Sources :  Sources are  multiplying and getting more and more complex
Efforts : Recruitment job become inefficient
Time : 3 to 8 weeks to find a candidate (agency)
Cost : Losing 90% of tenders
";
        $bloc->title2 = "Opportunities";
        $bloc->text2 = "Vaixel can  help you target the exact audience you want to reach - we match drivers with your brand. Here’s a top 3 of industries which invest in advertising :
22,5% - Telecommunications
21,3% -Other sector
11% - Banks
";
        $bloc->title3 = "The Ads market weighted in 5,8 Million MAD in 2018";
        $bloc->text3 = "Vaixel can  help you target the exact audience you want to reach - we match drivers with your brand. Here’s a top 3 of industries which invest in advertising :
22,5% - Telecommunications
21,3% -Other sector
11% - Banks
";
        $bloc->save();
    }
}
