<?php

namespace App\ContentModels;
use Illuminate\Database\Eloquent\Model;

class Questions_Category extends Model
{
    protected $table="question_categories";
    public function questions()
    {
        return $this->hasMany('App\ContentModels\Question',"question_category_id");
    }
}
