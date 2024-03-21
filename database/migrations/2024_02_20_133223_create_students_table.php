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
<<<<<<< HEAD
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
    $table->enum('status', ['active', 'in active'])->default('active');
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
    $table->string('email')->unique();
    $table->string('password');
    $table->string('school_code');
    $table->enum('action', ['pending', 'approved', 'delete', 'edit'])->default('pending');
    $table->string('role');
=======
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('birth_date')->nullable();
            $table->string('student_id')->unique();
            $table->string('student_roll')->nullable();
            $table->string('Class_name')->nullable();
            $table->string('group')->nullable();
            $table->string('section')->nullable();
            $table->string('shift')->nullable();
            $table->string('category')->nullable();
            $table->string('year')->nullable();
            $table->string('gender')->nullable();
            $table->string('religious')->nullable();
            $table->string('nationality')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('session')->nullable();
            $table->string('image')->nullable();
            $table->string('admission_date')->nullable();
            $table->string('father_name')->nullable();
            $table->string('father_mobile')->nullable();
            $table->string('father_occupation')->nullable();
            $table->string('father_nid')->nullable();
            $table->string('father_birth_date')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('mother_number')->nullable();
            $table->string('mother_occupation')->nullable();
            $table->string('mother_nid')->nullable();
            $table->string('mother_birth_date')->nullable();
            $table->string('mother_income')->nullable();
            $table->string('present_village')->nullable();
            $table->string('present_post_office')->nullable();
            $table->string('present_country')->nullable();
            $table->string('present_zip_code')->nullable();
            $table->string('present_district')->nullable();
            $table->string('present_police_station')->nullable();
            $table->string('parmanent_village')->nullable();
            $table->string('parmanent_post_office')->nullable();
            $table->string('parmanent_country')->nullable();
            $table->string('parmanent_zip_code')->nullable();
            $table->string('parmanent_district')->nullable();
            $table->string('parmanent_police_station')->nullable();
            $table->string('guardian_name')->nullable();
            $table->string('guardian_address')->nullable();
            $table->string('last_school_name')->nullable();
            $table->string('last_class_name')->nullable();
            $table->string('last_result')->nullable();
            $table->string('last_passing_year')->nullable();
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->string('school_code')->nullable();
            $table->enum('action', ['pending', 'approved', 'delete', 'edit'])->nullable()->default('pending');
            $table->string('role')->nullable();
>>>>>>> b69c0f0ce5598df3c8640173b05f2b59923fb1c5
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
