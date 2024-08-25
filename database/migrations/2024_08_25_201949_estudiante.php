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
        Schema::create('estudiantes',function(Blueprint$table){
            $table->id();
            $table->string('nombre',200);
            $table->string('apellido');
            $table->string('documento')->unique();
            $table->string('telefono');
            $table->string('curso')->nullable();
            $table->boolean('activo')->default(true);
            $table->timestamps();// crea tablas create'fecha' y update 'fecha'

        });
        //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
