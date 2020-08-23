<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBloc07Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bloc07', function (Blueprint $table) {
            $table->id();
            $table->string('main_title');
            $table->text('introduction_text');
            $table->string('title1');
            $table->text('text1');
            $table->string('title2');
            $table->text('text2');
            $table->string('title3');
            $table->text('text3');
            $table->string('title4');
            $table->text('text4');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bloc07');
    }
}
