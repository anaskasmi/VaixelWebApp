<?php

use Illuminate\Database\Seeder;

class bloc13_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bloc = new \App\ContentModels\Bloc13();
        $bloc->main_title1="VAIXEL Dashboard";
        $bloc->main_title2="Get to know where each Dirham invested in your campaign, goes";
        $bloc->text="We put together services with the aim to simplify vehicle-owning and make it profitable, for both drivers and brands.";
        $bloc->point1="We analyse the data based on the driver’s trip, and driving style, to get you the best drivers in town for your brand !";
        $bloc->point2="We then, launch an advertising campaign on the app, and brand ambassadors apply for them and get the wrapping installed";
        $bloc->point3="Cars drive around the city and create your advertising reach";
        $bloc->point4="You can control your campaign and KPIs in real time";
        $bloc->point5="Track all metrics (number of cars, miles, geo zones) and marketing KPIs (Impressions, GRP, Reach) in real time.";
        $bloc->save();
    }
}
