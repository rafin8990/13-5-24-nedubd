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
        Schema::create('grade_setup', function (Blueprint $table) {
            $table->id();
            $table->string('class_name');
            $table->string('exam_name');
            $table->string('year_name');
            $table->string('letter');
            $table->string('grade');
            $table->string('1st_range');
            $table->string('2nd_range');
            $table->enum('status', ['active', 'in active'])->default('active');
            $table->enum('action', ['pending', 'approved', 'delete', 'edit'])->default('pending');
            $table->string('school_code');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grade_setup');
    }
};
