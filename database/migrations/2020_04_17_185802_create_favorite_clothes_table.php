<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFavoriteClothesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favorite_clothes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedinteger('favorite_id');
            $table->unsignedinteger('clothes_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('favorite_id')
                ->references('id')->on('favorites')
                ->onDelete('cascade');
            $table->foreign('clothes_id')
                ->references('id')->on('clothes')
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
        Schema::dropIfExists('favorite_clothes');
    }
}
