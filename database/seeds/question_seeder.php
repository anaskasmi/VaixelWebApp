<?php

use Illuminate\Database\Seeder;

class question_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $question = new \App\ContentModels\Question();
        $question->question_category_id="1";
        $question->question="Question A ?";
        $question->answer="Answer";
        $question->save();

        $question = new \App\ContentModels\Question();
        $question->question_category_id="1";
        $question->question="Question B ?";
        $question->answer="Answer";
        $question->save();


        $question = new \App\ContentModels\Question();
        $question->question_category_id="1";
        $question->question="Question C ?";
        $question->answer="Answer";
        $question->save();





        $question = new \App\ContentModels\Question();
        $question->question_category_id="2";
        $question->question="Question A ?";
        $question->answer="Answer";
        $question->save();

        $question = new \App\ContentModels\Question();
        $question->question_category_id="2";
        $question->question="Question B ?";
        $question->answer="Answer";
        $question->save();

        $question = new \App\ContentModels\Question();
        $question->question_category_id="2";
        $question->question="Question C ?";
        $question->answer="Answer";
        $question->save();






        $question = new \App\ContentModels\Question();
        $question->question_category_id="3";
        $question->question="Question A ?";
        $question->answer="Answer";
        $question->save();

        $question = new \App\ContentModels\Question();
        $question->question_category_id="3";
        $question->question="Question B ?";
        $question->answer="Answer";
        $question->save();

        $question = new \App\ContentModels\Question();
        $question->question_category_id="3";
        $question->question="Question C ?";
        $question->answer="Answer";
        $question->save();

    }
}
