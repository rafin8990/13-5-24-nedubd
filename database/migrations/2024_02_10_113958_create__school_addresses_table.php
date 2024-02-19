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
        Schema::create('_school_addresses', function (Blueprint $table) {
            $table->id();
            $table->string('schoolName');
            $table->string('email')->unique();
            $table->string('phone_number')->unique();
            $table->string('logo');
            $table->string('address');
            $table->string('school_code');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_school_addresses');
    }
};
