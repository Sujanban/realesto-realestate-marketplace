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
            $table->id();
            // $table->string("author");
            $table->string("title");
            $table->string("author");
            $table->string("slug");
            $table->string("location");
            $table->string("price");
            // $table->float('price', 15);
            $table->text("body");
            $table->string("area");
            $table->text("feature");
            $table->text("bedroom");
            $table->text("washroom");
            $table->text("kitchen");
            $table->text("garage");
            $table->string("contact");
            $table->text("cover");
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
        Schema::dropIfExists('posts');
    }
}
