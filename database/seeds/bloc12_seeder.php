<?php

use Illuminate\Database\Seeder;

class bloc12_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bloc = new \App\ContentModels\Bloc12();
        $bloc->main_title="Interested in being a Driver ?";
        $bloc->title1="Sign up";
        $bloc->text1="Fill in the short sign up form here (link to the form). To avoid any problems related to the drivers, we use KYC/AML Application to get the best security possible for both the driver and the company.";
        $bloc->title2="The matching process";
        $bloc->text2="We find advertisers that want to advertise on cars like yours and let you know as soon as there is a match. If you agree to go ahead, we will arrange for the adverts to be stuck on to your car";
        $bloc->title3="Earn money";
        $bloc->text3="Once you're advertising, we deposit money each month into your bank account. Ready to go ?";
        $bloc->save();
    }
}
