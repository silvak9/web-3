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
        Schema::create('jogadors', function (Blueprint $table) {
            $table->id();
            $table->string('nome',100);
            $table->string('posicao',100);
            $table->integer('idade');
            $table->foreignId('times_id')
                ->constrained('times', 'id')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jogadors');
    }
};
