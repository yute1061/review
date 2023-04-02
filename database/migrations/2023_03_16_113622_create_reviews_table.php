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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->string('item');
            $table->string('maker')->nullable();
            $table->string('product');
            $table->text('body');
            $table->string('image_path1')->nullable();
            $table->string('image_path2')->nullable();
            $table->string('image_path3')->nullable();
            $table->string('image_path4')->nullable();
            $table->string('image_path5')->nullable();
            $table->string('durability');
            $table->string('usability');
            $table->string('cost');
            $table->string('evaluation');
            $table->boolean('status')->nullable(); //投稿済かどうかの判断
            $table->string('contributor')->nullable();
            $table->string('gender')->nullable();
            $table->string('age')->nullable();
            $table->string('career')->nullable();
            $table->string('ridestyle')->nullable();
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
        Schema::dropIfExists('reviews');
    }
};
