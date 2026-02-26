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
        Schema::create('appoinments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nic')->unique();
            $table->string('email')->unique();
            $table->integer('phone_number');
            $table->integer('age');
            $table->enum('gender', ['Male', 'Female']);
            $table->enum('specialization', ['Cardiology', 'Endocrinology', 'Gastroenterology', 'Hematology', 'Neurology']);
            $table->string('doc_name');
            $table->date('date');
            $table->time('time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appoinments');
    }
};
