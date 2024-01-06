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
        Schema::create('aulas', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('modulo_id');
            $table->string('nome');
            $table->string('url');
            $table->string('video');
            $table->text('descricao');
            $table->timestamps();

            $table->foreign('modulo_id')
                ->references('id')
                ->on('modulos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aulas');
    }
};
