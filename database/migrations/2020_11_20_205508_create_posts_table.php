<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id(); //id de post
            $table->bigInteger('user_id')->unsigned(); //id usuario 
            $table->string('title'); //título del post
            $table->string('slug')->unique(); //URL única del post
            $table->string('image')->nullable(); //imagen del post
            $table->text('body'); //Cuerpo del post
            $table->string('iframe')->nullable(); //Media del post
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users'); //Relación foranea del post con el usuario correspondiente
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
