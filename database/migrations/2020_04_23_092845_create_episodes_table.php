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
            $table->string('title', 100);
            $table->foreign('title')->references('page_id')->on('titles')->onDelete('no action');
            $table->integer('season')->default(1);
            $table->integer('episode_no')->default(1);
            $table->string('name', 50);
            $table->text('thumbnail')->default('img/default.jpg');
            $table->date('release_date')->default(today());
            $table->text('description')->default('None');
            $table->integer('views')->default(0);
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
