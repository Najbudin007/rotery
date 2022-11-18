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
        Schema::create('members_details', function (Blueprint $table) {
            $table->id();
            $table->string('member_category');
            $table->string('member_fees_category');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('city');
            $table->string('country');
            $table->string('job_title');
            $table->string('date');
            $table->string('duty_stations');
            $table->text('experties_area');
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
        Schema::dropIfExists('members_details');
    }
};
