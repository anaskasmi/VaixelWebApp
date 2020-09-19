<?php

use Illuminate\Database\Seeder;

class question_categories_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $questions_Categoriy = new \App\ContentModels\Questions_Category();
        $questions_Categoriy->question_category = "Drivers Related";
        $questions_Categoriy->save();


        $questions_Categoriy = new \App\ContentModels\Questions_Category();
        $questions_Categoriy->question_category = "Brands Related ";
        $questions_Categoriy->save();


        $questions_Categoriy = new \App\ContentModels\Questions_Category();
        $questions_Categoriy->question_category = "General Questions";
        $questions_Categoriy->save();
    }
}
