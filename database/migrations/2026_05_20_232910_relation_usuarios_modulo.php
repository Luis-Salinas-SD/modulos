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
        //Migracion para relacionar usuarios con modulo
        Schema::table('usuarios', function (Blueprint $table) {
            $table->unsignedBigInteger('id_modulo')->nullable();
            $table->foreign('id_modulo')->references('id_modulo')->on('modulo')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('usuarios', function (Blueprint $table) {
            $table->dropForeign(['id_modulo']);
            $table->dropColumn('id_modulo');
        });
    }
};
