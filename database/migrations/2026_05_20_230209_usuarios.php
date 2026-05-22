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
        //tabla de usuarios
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('email')->unique();
            $table->string('password');
            //$table->unsignedBigInteger('id_modulo')->nullable();
            //$table->foreign('modulo_id')->references('id_modulo')->on('modulo')->onDelete('set null');
            $table->timestamps();
        });


        //tabla de modulo
        Schema::create('modulo', function (Blueprint $table) {
            $table->id('id_modulo');
            $table->string('nombre');
            $table->string('zona');
            $table->string('estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('usuarios');
        Schema::dropIfExists('modulo');
    }
};
