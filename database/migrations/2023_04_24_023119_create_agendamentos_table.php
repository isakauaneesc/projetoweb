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
        Schema::create('agendamentos', function (Blueprint $table) {
            $table->string("Nome");//Coloquei essa linha
            $table->string("Telefone");//Coloquei essa linha
            $table->string("Origem");//Coloquei essa linha
            $table->string("Data_Contato");//Coloquei essa linha
            $table->string("Observacao");//Coloquei essa linha
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agendamentos');
    }
};
