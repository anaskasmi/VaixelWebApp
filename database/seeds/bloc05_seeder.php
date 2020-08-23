<?php

use Illuminate\Database\Seeder;

class bloc05_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bloc = new \App\ContentModels\Bloc05();
        $bloc->main_title="How it works ?";
        $bloc->introduction_text="The designs for cars are very needy, and the  intricacies and difficulties of designing on a non-flat surface which include the likes of car door handles, side panelling, windows, and bumper contours, creates quite a complex design challenge, that’s why Vaixel, works with professionals who can deal with these kind of challenges, so that the driver and the brand, are both satisfied by the rendering.";

        $bloc->title1="driver or a brand ?";
        $bloc->text1="Whether you’re a driver or a brand, you need to fill in the form, and it only takes less than 5 minutes to register. We, by then, lead off with establishing target geography, goals, and timeline.";
        $bloc->icon1="https://image.flaticon.com/icons/svg/594/594666.svg";

        $bloc->title2="If you’re a driver";
        $bloc->text2="We will get in touch with you as soon as you have been matched with a brand and tell you who they are and details about the “campaign”. If you’re a brand, a sales representative will get back to you to understand your need and suggest you the most suitable offers.";
        $bloc->icon2="https://image.flaticon.com/icons/svg/594/594671.svg";

        $bloc->title3="If you’re a brand";
        $bloc->text3="We now start customizing the campaign : Number of cars, partial or full wrap, car wrap design, duration of campaign. Once the driver(s) is(are) found, we launch the campaign and start  the process : Reporting on mileage, impressions, heatmaps, pictures. If you’re a driver, you get paid each month while your car is on campaign.";
        $bloc->icon3="https://image.flaticon.com/icons/svg/594/594670.svg";

        $bloc->image="https://www.unido.org/sites/default/files/default_images/default_media_image.png";

        $bloc->save();
    }
}
