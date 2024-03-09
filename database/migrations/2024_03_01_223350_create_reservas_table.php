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
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->integer('idCliente');
            $table->integer('idFuncionario');
            $table->integer('numeroQuarto');
            $table->enum('situacao', ['Pago', 'Pendente']);
            $table->decimal('valorTotal', 8, 2);
            $table->date('dataEntrada');
            $table->date('dataSaida');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
