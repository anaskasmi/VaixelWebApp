<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBloc13Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bloc13', function (Blueprint $table) {
            $table->id();
            $table->string('main_title1');
            $table->string('main_title2');
            $table->text('text');
            $table->text('point1');
            $table->text('point2');
            $table->text('point3');
            $table->text('point4');
            $table->text('point5');
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
        Schema::dropIfExists('bloc13');
    }
}
