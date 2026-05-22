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
        //Establece la relacion entre oficinas - asignacinar_oficina
        Schema::table('asignar_oficina', function (Blueprint $table) {
            $table->unsignedBigInteger('oficina_id');
            $table->foreign('oficina_id')->references('id_oficina')->on('oficina')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('asignar_oficina', function (Blueprint $table) {
            $table->dropForeign(['oficina_id']);
            $table->dropColumn('oficina_id');
        });
    }
};