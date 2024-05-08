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
        Schema::create('analysis_results', function (Blueprint $table) {
            $table->id();

            $table->foreignId('mother_id')->constrained('mothers');
            $table->foreignId('doctor_id')->constrained('doctors');
            $table->foreignId('labDoctor_id')->default(1)->constrained('lab_doctors');
            $table->string('analysis_Name');
            $table->string('photo',300);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('analysis_results');
    }
};
