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
        Schema::create('add_class_wise_subject', function (Blueprint $table) {
            $table->id();
            $table->string('class_name');
            $table->json('subject_name')->nullable();
            $table->json('subject_type')->nullable();
            $table->string('group_name');
            $table->string('subject_serial');
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
        Schema::dropIfExists('add_class_wise_subject');
    }
};