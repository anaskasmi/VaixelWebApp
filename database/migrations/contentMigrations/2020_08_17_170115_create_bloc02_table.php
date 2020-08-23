<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBloc02Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bloc02', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('circle1_text');
            $table->string('circle1_icon');
            $table->string('circle2_text');
            $table->string('circle2_icon');
            $table->string('circle3_text');
            $table->string('circle3_icon');
            $table->string('circle4_text');
            $table->string('circle4_icon');
            $table->string('circle5_text');
            $table->string('circle5_icon');
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
        Schema::dropIfExists('bloc02');
    }
}
