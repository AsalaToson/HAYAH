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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->foreignId('section_id')->references('id')->on('sections')->onDelete('cascade');
            $table->string('password');
            $table->enum('appointment',['السبت','الاحد','الاثنين','الثلاثاء','الاربعاء','الخميس','الجمعه']);
            $table->integer('age');
            $table->string('experience');
//            $table->foreignId('section_id')->references('id')->on('sections')->onDelete('cascade');
            $table->integer('phone');
            $table->string('gender');
            $table->string('image')->nullable();
            $table->string('address');
            $table->decimal('price');
            $table->string('details');
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
