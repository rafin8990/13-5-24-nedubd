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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('birth_date');
            $table->string('student_id');
            $table->string('class');
            $table->string('section');
            $table->string('year');
            $table->string('gender');
            $table->string('image');
            $table->string('present_address');
            $table->string('present_street');
            $table->string('present_city');
            $table->string('present_country');
            $table->string('present_zip_code');
            $table->string('parmanent_address');
            $table->string('parmanent_street');
            $table->string('parmanent_city');
            $table->string('parmanent_country');
            $table->string('parmanent_zip_code');
            $table->string('email');
            $table->string('phoneNumber');
            $table->string('password');
            $table->string('role');
            $table->string('school_code');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
