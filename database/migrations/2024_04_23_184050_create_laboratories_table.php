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
        Schema::create('laboratories', function (Blueprint $table) {


                $table->id();
                $table->longText('description');
                $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
                $table->foreignId('doctor_id')->references('id')->on('doctors')->onDelete('cascade');
                $table->unsignedBigInteger('labDoctor_id')->default(1);
                $table->foreign('labDoctor_id')->references('id')->on('lab_doctors');
                $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laboratories');
    }
};
