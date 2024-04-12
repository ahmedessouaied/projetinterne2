<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('category');
            $table->string('title');
            $table->text('description');
            $table->text('body');
            $table->unsignedBigInteger('author_id');
            $table->integer('likes');
            $table->integer('ncomments');
            $table->integer('bookmarks');


            $table->foreign('author_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('image')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
