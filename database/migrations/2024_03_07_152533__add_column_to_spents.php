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
        Schema::table('spents', function (Blueprint $table) {
            $table->string('ingreso');
            $table->dropColumn('nombre')->nullable();
            $table->renameColumn('nroVale','nro')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('spents', function (Blueprint $table) {
            //
        });
    }
};
