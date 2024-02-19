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
        Schema::create('feecollestions', function (Blueprint $table) {
            $table->id();
            $table->string('class');            
            $table->string('year');            
            $table->string('month');            
            $table->string('admission_fee');            
            $table->string('tuition_fee');            
            $table->string('library_fee');            
            $table->string('transport_fee');            
            $table->string('curriculum_fee');            
            $table->string('school_code');            
                       

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feecollestions');
    }
};
