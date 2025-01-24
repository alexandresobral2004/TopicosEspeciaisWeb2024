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
        Schema::create('end_clientes', function (Blueprint $table) {
            $table->id();
            $table->string('rua')->nullable();;
            $table->string('bairro')->nullable();;
            $table->string('cidade')->nullable();;
            $table->string('uf')->nullable();;
            $table->string('cep')->nullable();
            $table->string('complemento')->nullable();
            $table->string('numero')->nullable();;
            $table->timestamps();
            //Definir chave estrangeira
            $table->foreignId('cliente_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('end_clientes');
    }
};
