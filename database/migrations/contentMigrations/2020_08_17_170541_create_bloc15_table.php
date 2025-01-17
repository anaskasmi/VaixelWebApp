<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBloc15Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bloc15', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title');
            $table->string('image_url');
            $table->string('linkedIn_url');
            $table->string('facebook_url');
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
        Schema::dropIfExists('bloc15');
    }
}
