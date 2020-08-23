<?php

use Illuminate\Database\Seeder;

class bloc02_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bloc = new \App\ContentModels\Bloc02();
        $bloc->title="WORLDWIDE MARKET INSIGHTS";
        $bloc->circle1_text="89% go unnoticed";
        $bloc->circle1_icon="https://image.flaticon.com/icons/svg/1077/1077170.svg";
        $bloc->circle2_text="30,000-80,000 mobile impressions per day";
        $bloc->circle2_icon="https://image.flaticon.com/icons/svg/2279/2279095.svg";
        $bloc->circle3_text="84% Customer Retention Rate";
        $bloc->circle3_icon="https://image.flaticon.com/icons/svg/3003/3003035.svg";
        $bloc->circle4_text="More than 1,000 companies in the world use car wrapping ads";
        $bloc->circle4_icon="https://image.flaticon.com/icons/svg/560/560716.svg";
        $bloc->circle5_text="96% audiences think vehicle ads have more impact";
        $bloc->circle5_icon="https://image.flaticon.com/icons/svg/2114/2114337.svg";
        $bloc->save();
    }
}
