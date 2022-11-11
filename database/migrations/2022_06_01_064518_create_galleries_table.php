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
        Schema::create('galleries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("gallery_folder_id");
            $table->string("image")->nullable();
            $table->enum("type", ["image", "video"]);
            $table->string("link")->nullable();
            $table->enum("status", ["active", "inactive"])->default("inactive");
            $table->foreign("gallery_folder_id")->references("id")->on("gallery_folders")->onDelete("cascade");
            $table->softDeletes();

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
        Schema::dropIfExists('galleries');
    }
};
