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
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
			$table->string('name');
			$table->string('email');
			$table->string('password');
			$table->bigInteger('mobile');
			$table->string('address');
			$table->string('gender');
			$table->string('file');
			$table->unsignedBigInteger('rid');
			$table->foreign('rid')->references('rid')->on('roles');
			$table->enum('status',['Approved','Pending'])->default('Pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
