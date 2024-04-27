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
                $table->foreignId('mother_id')->references('id')->on('mothers')->onDelete('cascade');
                $table->foreignId('doctor_id')->references('id')->on('doctors')->onDelete('cascade');
                $table->foreignId('labdoctor_id')->nullable()->references('id')->on('lab_doctors')->onDelete('cascade');
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
