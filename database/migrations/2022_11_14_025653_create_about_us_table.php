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
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->text("description");
            $table->string("who_image1")->nullable();
            $table->string("who_image2")->nullable();
            $table->string("who_image3")->nullable();
            $table->string("who_image4")->nullable();
            $table->text("summary")->nullable();
            $table->string("why_image1")->nullable();
            $table->string("why_image2")->nullable();
            $table->string("why_image3")->nullable();
            $table->string("why_image4")->nullable();
            $table->string("image")->nullable();
            $table->string("glimpse1")->nullable();
            $table->string("glimpse2")->nullable();
            $table->string("glimpse3")->nullable();
            $table->string("status")->default('active');
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
        Schema::dropIfExists('about_us');
    }
};
