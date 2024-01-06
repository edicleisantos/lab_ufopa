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
        Schema::create('resposta_suporte', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('suporte_id')->index();
            $table->uuid('user_id')->index()->nullable();
            $table->uuid('admin_id')->index()->nullable();
            $table->text('descricao');
            $table->timestamps();

            $table->foreign('suporte_id')
                    ->references('id')
                    ->on('suportes');

            $table->foreign('user_id')
                    ->references('id')
                    ->on('users');

            $table->foreign('admin_id')
                    ->references('id')
                    ->on('admins');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resposta_suporte');
    }
};
