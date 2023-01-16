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
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('family_name')->nullable();
            $table->string('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('married')->nullable();
            $table->string('spouseName')->nullable();
            $table->string('anniversaryDate')->nullable();
            $table->string('childrenName')->nullable();
            $table->string('dateOfBirthOfChildren')->nullable();
            $table->string('former_member')->nullable();
            $table->string('riMembershipID')->nullable();
            $table->string('clubName')->nullable();
            $table->string('alumnus')->nullable();
            $table->string('email')->nullable();
            $table->string('home_address')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('country')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('alternative_phone_number')->nullable();
            $table->string('mail_address')->nullable();
            $table->string('job_title')->nullable();
            $table->string('res_business')->nullable();
            $table->string('classification')->nullable();
            $table->string('business_address')->nullable();
            $table->string('business_telephone')->nullable();
            $table->string('fax')->nullable();
            $table->string('business_email')->nullable();
            $table->longText('residence')->nullable();
            $table->longText('business')->nullable();
            $table->longText('others')->nullable();
            $table->longText('alternate_address')->nullable();
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
