<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClothesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clothes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('clothes_name');
            $table->unsignedinteger('brand_id')->nullable();
            $table->unsignedinteger('genre_id');
            $table->integer('price')->nullable();
            $table->text('memo')->nullable();
            $table->string('image_path');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('brand_id')
                ->references('id')->on('brands')
                ->onDelete('cascade');
            $table->foreign('genre_id')
                ->references('id')->on('genres')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clothes');
    }
}
