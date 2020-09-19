<?php

use Illuminate\Database\Seeder;

class bloc15_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {




        $bloc = new \App\ContentModels\Bloc15();
        $bloc->name="Hafed Aziz";
        $bloc->title="Chief Executive Officer";
        $bloc->image_url="https://www.iconfinder.com/data/icons/management-1/100/business-05-512.png";
        $bloc->linkedIn_url="https://www.linkedin.com";
        $bloc->facebook_url="https://www.facebook.com/";
        $bloc->save();


        $bloc = new \App\ContentModels\Bloc15();
        $bloc->name="Salma Rahmouni";
        $bloc->title="Chief Marketing Officer";
        $bloc->image_url="https://st2.depositphotos.com/1007566/11574/v/950/depositphotos_115748586-stock-illustration-young-executive-woman-profile-icon.jpg";
        $bloc->linkedIn_url="https://www.linkedin.com/";
        $bloc->facebook_url="https://www.facebook.com/";
        $bloc->save();



        $bloc = new \App\ContentModels\Bloc15();
        $bloc->name="Anas KASMI";
        $bloc->title="Chief technology officer";
        $bloc->image_url="https://media-exp1.licdn.com/dms/image/C4D03AQHKBb6u1gVPGg/profile-displayphoto-shrink_800_800/0?e=1605744000&v=beta&t=VKArqIbwziPNAot78mlWa6Nxks2vsmLQ3OGEQLKDszE";
        $bloc->linkedIn_url="https://www.linkedin.com/in/anaskasmi/";
        $bloc->facebook_url="https://www.facebook.com/anaskasmidev/";
        $bloc->save();


        $bloc = new \App\ContentModels\Bloc15();
        $bloc->name="Some One";
        $bloc->title="Some Role";
        $bloc->image_url="https://www.iconfinder.com/data/icons/management-1/100/business-05-512.png";
        $bloc->linkedIn_url="https://www.linkedin.com";
        $bloc->facebook_url="https://www.facebook.com/";
        $bloc->save();
    }
}
