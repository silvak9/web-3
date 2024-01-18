<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // define a estrutura da tabela, atributos e relacionamentos
    public function up(): void
    {
        Schema::create('projetos', function (Blueprint $table) {
            $table->id();
            $table->string('orientador', 100);
            $table->integer('bolsistas');
            $table->string('titulo', 200);
            $table->text('descricao');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    // como sera removida a tabela
    public function down(): void
    {
        Schema::dropIfExists('projetos');
    }
};
