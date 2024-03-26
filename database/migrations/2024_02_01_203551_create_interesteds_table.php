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
        Schema::create('interesteds', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('money_boxes_id')->nullable();
            $table->string('nombreCompleto');
            $table->foreign('money_boxes_id')->references('id')->on('money_boxes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('interesteds');
    }
};
