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
        Schema::create('leaves', function (Blueprint $table) {
            $table->id('id');
//            $table->unsignedBigInteger('employee_id');
//            $table->foreign('employee_id')->references('id')->on('employees')->cascadeOnDelete();
            $table->string('name'); //paxi select employee id
            $table->enum('duration',['half day','full day'])->defaul('half day');
            $table->string('reason');
            $table->date('date');
            $table->enum('type',['unpaid','paid','annual'])->default('Unpaid');
            $table->enum('status',['approved','rejected','pending'])->default('pending');
//            $table->string('status')->default('null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leaves');
    }
};
