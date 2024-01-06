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
        Schema::create('cursolaboratorios', function (Blueprint $table) {
            $table->id();
            $table->uuid('curso_id');
            $table->bigInteger('lab_id');
            $table->timestamps();

            $table->foreign('curso_id')
                    ->references('id')
                    ->on('cursos');

            $table->foreign('lab_id')
                    ->references('id')
                    ->on('laboratorios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursolaboratorios');
    }
};
