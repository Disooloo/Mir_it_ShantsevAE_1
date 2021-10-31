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
            $table->string('title');
            $table->text('content');
            $table->text('description1')->nullable();
            $table->bigInteger('cat_id')->unsigned();
            $table->string('img');
            $table->date('Date_birth')->nullable();
            $table->date('Date_death')->nullable();
            $table->string('link')->nullable();
            $table->string('Sphere')->default('IT');
            $table->date('create_at');
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
