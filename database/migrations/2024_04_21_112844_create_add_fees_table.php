<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('add_fees', function (Blueprint $table) {
            $table->id();
            $table->string('class_name');
            $table->string('group_name');
            $table->string('fee_type');
            $table->string('fee_amount');
            $table->enum('status', ['checked', 'unchecked'])->default('unchecked');
            $table->enum('action', ['pending', 'approved', 'delete', 'edit'])->default('approved');
            $table->string('school_code');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('add_fees');
    }
};
