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
        Schema::create('spents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('money_boxes_id')->nullable();
            $table->string('nombre');
            $table->date('fechaCreacion');
            $table->string('nroVale');
            $table->string('nroFactura')->nullable();
            $table->string('descripcion',500);
            $table->decimal('gasto', 6, 2);
            $table->foreign('money_boxes_id')->references('id')->on('money_boxes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spents');
    }
};
