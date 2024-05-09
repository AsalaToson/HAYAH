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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mother_id')->constrained('mothers');
            $table->foreignId('doctor_id')->constrained('doctors');
            $table->date('date')->nullable();
            $table->time('time')->nullable();
            $table->string('status')->default('pending');
            $table->decimal('fee')->nullable();
            $table->enum('type',['Uncertain','Certain','Deadline expired'])->default('Uncertain');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->dateTime('appointment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
