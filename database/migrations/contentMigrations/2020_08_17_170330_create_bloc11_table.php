<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBloc11Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bloc11', function (Blueprint $table) {
            $table->id();
            $table->string('main_title');
            $table->text('introduction_text');
            $table->string('CTA1_text');
            $table->string('CTA1_link');
            $table->string('CTA2_text');
            $table->string('CTA2_link');
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
        Schema::dropIfExists('bloc11');
    }
}
