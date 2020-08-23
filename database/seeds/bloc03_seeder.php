<?php

use Illuminate\Database\Seeder;

class bloc03_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bloc = new \App\ContentModels\Bloc03();
        $bloc->title = "About VAIXEL";
        $bloc->text = "Vaixel aims to help top brands across the country reach their target consumers in a way that’s memorable, effective, and proven. Powered by high-mileage drivers, Vaixel is revolutionizing the way brands communicate their message.
VAIXEL is a national advertising company that pays everyday drivers to place removable ads on their cars. Once the driver is  registered with our program we actively try and find him an advertiser who wants to market their message on his car, given his driving habits.
";
        $bloc->image_link = "https://1stwebdesigner.com/wp-content/uploads/2019/08/dashboard-design-inspiration-thumb.jpg";
        $bloc->video_link = "https://www.youtube.com/watch?v=SSo_EIwHSd4";
        $bloc->save();
    }
}
