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
    $table->string('student_id')->unique();
    $table->string('student_roll');
    $table->string('Class_name');
    $table->string('group');
    $table->string('section');
    $table->string('shift');
    $table->string('category');
    $table->string('year');
    $table->string('gender');
    $table->string('religious');
    $table->string('nationality');
    $table->string('blood_group');
    $table->string('session');
    $table->string('image');
    $table->string('admission_date');
    $table->string('father_name');
    $table->string('father_mobile');
    $table->string('father_occupation');
    $table->string('father_nid');
    $table->string('father_birth_date');
    $table->string('mother_name');
    $table->string('mother_number');
    $table->string('mother_occupation');
    $table->string('mother_nid');
    $table->string('mother_birth_date');
    $table->string('mother_income');
    $table->string('present_village');
    $table->string('present_post_office');
    $table->string('present_country');
    $table->string('present_zip_code');
    $table->string('present_district');
    $table->string('present_police_station');
    $table->string('parmanent_village');
    $table->string('parmanent_post_office');
    $table->string('parmanent_country');
    $table->string('parmanent_zip_code');
    $table->string('parmanent_district');
    $table->string('parmanent_police_station');
    $table->string('guardian_name');
    $table->string('guardian_address');
    $table->string('last_school_name');
    $table->string('last_class_name');
    $table->string('last_result');
    $table->string('last_passing_year');
    $table->string('email');
    $table->string('password');
    $table->string('school_code');
    $table->enum('action', ['pending', 'approved', 'delete', 'edit'])->default('pending');
    $table->string('role');
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
