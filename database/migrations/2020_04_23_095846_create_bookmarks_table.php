<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookmarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookmarks', function (Blueprint $table) {
            $table->integer('user_id');
            $table->foreign('user_id')->references('users')->on('id');
            $table->integer('episode');
            $table->foreign('episode')->references('episodes')->on('id');
            $table->enum('status', ['planned', 'watching',  'completed',  'on-hold', 'dropped']);
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
        Schema::dropIfExists('bookmarks');
    }
}
