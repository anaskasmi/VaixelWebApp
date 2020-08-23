<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBloc14Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bloc14', function (Blueprint $table) {
            $table->id();
            $table->string('main_title');
            $table->string('introduction_text');

            $table->string('card1_date');
            $table->string('card1_title');
            $table->text('card1_text');

            $table->string('card2_date');
            $table->string('card2_title');
            $table->text('card2_text');

            $table->string('card3_date');
            $table->string('card3_title');
            $table->text('card3_text');

            $table->string('card4_date');
            $table->string('card4_title');
            $table->text('card4_text');

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
        Schema::dropIfExists('bloc14');
    }
}
