<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::rename('asignar_oficina', 'oficina_usuarios');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::rename('oficina_usuarios', 'asignar_oficina');
    }
};
