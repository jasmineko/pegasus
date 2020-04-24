<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEpisodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('episodes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100)->nullable($value = false);
            $table->foreign('name')->references('titles')->on('name');
            $table->integer('season');
            $table->integer('episode_no');
            $table->text('thumbnail');
            $table->date('release_date');
            $table->text('description');
            $table->bigInteger('views');
            $table->text('commentaries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('episodes');
    }
}
