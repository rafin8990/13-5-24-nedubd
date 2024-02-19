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
        Schema::create('head_teachers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('designation');
            $table->string('email')->unique();
            $table->string('phone_number')->unique();
            $table->string('image');
            $table->string('password');
            $table->string('address');
            $table->string('nid');
            $table->string('details');
            $table->string('gender');
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
        Schema::dropIfExists('head_teachers');
    }
};
