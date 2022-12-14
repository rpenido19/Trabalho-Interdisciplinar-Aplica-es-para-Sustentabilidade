<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('author', 100);
            $table->string('title', 100);
            $table->string('tags', 200);
            $table->text('description');
            $table->string('url', 100);
            $table->date('published_at');
            $table->tinyInteger('likes');
            $table->tinyInteger('accesses');
            $table->unsignedBigInteger('user_log');
            $table->foreign('user_log')->references('id')->on('users');
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
        Schema::dropIfExists('news');
    }
};
