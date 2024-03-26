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
        Schema::create('collaborations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('primary_user_id')->nullable();
            $table->unsignedBigInteger('secondary_user_id')->nullable();
            $table->unsignedBigInteger('correspondence_id')->nullable();
            $table->foreign('primary_user_id')->references('id')->on('users')->constrained();
            $table->foreign('secondary_user_id')->references('id')->on('users')->constrained();
            $table->foreign('correspondence_id')->references('id')->on('correspondences')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('collaborations');
    }
};
