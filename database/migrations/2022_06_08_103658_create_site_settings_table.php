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
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->string("image")->nullable();
            $table->text("site_title")->nullable();
            $table->string("alternate_image")->nullable();
            $table->text("district")->nullable();
            $table->text("description")->nullable();
            $table->string("club_number")->nullable();
            $table->string("contact_number")->nullable();
            $table->string("about_image")->nullable();
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
        Schema::dropIfExists('site_settings');
    }
};
