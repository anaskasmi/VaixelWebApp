<?php

use Illuminate\Database\Seeder;

class bloc04_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bloc = new \App\ContentModels\Bloc04();
        $bloc->main_title="Advantages of using Vaixel ?";
        $bloc->title1="Security is our priority";
        $bloc->text1="We use KYC/AML Application to get the best security possible for both the driver and the company. Using an AI-based identity verification software, we guarantee to both parties, the highest level of security. Also, a personal data protection is insured, no matter where you are located.";
        $bloc->icon1="https://image.flaticon.com/icons/svg/508/508250.svg";

        $bloc->title2="WIN-WIN agreement";
        $bloc->text2="Whether you’re a driver or the advertiser, everybody wins. If you’re a driver, you get a monthly income which covers all your expenses and more. In the other hand, if you’re an advertiser, you get to have your ad viewed by everyone and noticed way more than online/TV/Radio or any other way of advertisement. By then, your sales increase, and the deal is sealed !";
        $bloc->icon2="https://image.flaticon.com/icons/svg/3135/3135727.svg";

        $bloc->title3="EASY USE";
        $bloc->text3=" If you’re a driver, you only need to fill our form, register and wait for the approval to start. If you’re an advertiser you can fill the form which is available to get in touch with one of our sales representative.";
        $bloc->icon3="https://image.flaticon.com/icons/svg/1467/1467445.svg";

        $bloc->save();
    }
}
