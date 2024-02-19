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
        Schema::create('staffs', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('birth_date');
            $table->string('staff_id');
            $table->string('designation');
            $table->string('section');
            $table->string('joindate');
            $table->string('gender');
            $table->string('image');
            $table->string('present_address');
            $table->string('present_city');
            $table->string('present_state');
            $table->string('present_country');
            $table->string('present_zip_code');
            $table->string('parmanent_address');
            $table->string('parmanent_state');
            $table->string('parmanent_city');
            $table->string('parmanent_country');
            $table->string('parmanent_zip_code');
            $table->string('email');
            $table->string('mobile');
            $table->string('password');
            $table->string('nid');
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
        Schema::dropIfExists('staffs');
    }
};
