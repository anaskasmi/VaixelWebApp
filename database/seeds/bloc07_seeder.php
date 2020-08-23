<?php

use Illuminate\Database\Seeder;

class bloc07_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bloc = new \App\ContentModels\Bloc07();

        $bloc->main_title = "Additional information";
        $bloc->introduction_text = "Get to know more about our activity and knowledge.";
        $bloc->title1 = "Offer";
        $bloc->text1 = "Our solution is a mix of business models between Facebook's advertising system and Uber's business model. It is a mobile application for vehicle owners to help them earn more money by putting advertising to our advertisers.They will have a web and mobile application directly or through their advertising agencies to budget, choose and activate their advertising campaign.";
        $bloc->title2 = "Value Proposition";
        $bloc->text2 = "Large fleet of vehicles
Vehicle availability
100% digitalized advertising tracking
Budget Management";
        $bloc->title3 = "Among the key Differentiators";
        $bloc->text3 = "Total optimized of the budget
1 platform of advertising
Optimized fleet
Fast response time";
        $bloc->title4 = "Pub Car Concept";
        $bloc->text4 = "Mobile App for customers and drivers
Real Time analysis interface
Real time tracking system
Audience targeting in detail";
        $bloc->save();
    }
}
