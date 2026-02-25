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
            $table->string('nic')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->date('birth_day');
            $table->enum('gender', ['Male', 'Female']);
            $table->enum('specialization', ['Cardiology', 'Endocrinology', 'Gastroenterology', 'Hematology', 'Neurology']);
            $table->longText('qualification');
            $table->longText('expereince');
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
