<?php

namespace App\ContentModels;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table="questions";

    public function category()
    {
        return $this->belongsTo('App\ContentModels\Questions_Category','question_category_id');
    }
}
