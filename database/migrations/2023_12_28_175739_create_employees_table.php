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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('gender', ['Male', 'Female', 'Other'])->default('Male');
            $table->string('designation')->nullable();
            $table->string('department')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('dob')->nullable();
            $table->string('date')->nullable();
            $table->string('mobile')->nullable();
            $table->rememberToken();
            $table->enum('status', ['Active', 'Inactive'])->default('Active');            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
