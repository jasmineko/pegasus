<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTitlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('titles', function (Blueprint $table) {
            $table->string('page_id', 100)->nullable($value = false);
            $table->primary('page_id');
            $table->string('name', 100);
            $table->text('thumbnail');
            $table->enum('category', ['series', 'dorama', 'cartoon']);
            $table->set('genre', ['comedy', 'action', 'horror', 'sci-fi', 'supernatural', 'adventure', 'romance', 'drama']);
            $table->date('release_date');
            $table->enum('status', ['airing', 'finished']);
            $table->string('country', 30);
            $table->text('description');
            $table->float('rating', 3, 1)->default(0.0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('titles');
    }
}
