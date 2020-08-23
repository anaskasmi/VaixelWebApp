<?php

use Illuminate\Database\Seeder;

class bloc01_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bloc = new \App\ContentModels\Bloc01();
        $bloc->title="Earn money, for each Kilometer covered";
        $bloc->text="Vaixel matches brands with high-mileage car owners who want to drive with an ad decal on their car. Thanks to this win-win agreement, brands use Vaixel to get their message seen in certain geographic locations while drivers join us to make money for something they already do  : Drive.";
        $bloc->CTA="Register now";
        $bloc->link_1="#";
        $bloc->link_2="#";
        $bloc->save();
    }
}
