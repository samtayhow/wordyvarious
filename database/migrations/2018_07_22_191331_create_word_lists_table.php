<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWordListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('word_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('title');
            $table->string('slug');
            $table->integer('author');
            $table->text('description');
            $table->text('words');
            $table->text('tags');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('word_lists');
    }
}
