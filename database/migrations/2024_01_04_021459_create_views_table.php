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
        Schema::create('views', function (Blueprint $table) {
            $table->id();
            $table->uuid('user_id');
            $table->uuid('aula_id');
            $table->integer('qty')->default(1);
            $table->timestamps();

            $table->foreign('user_id')
                    ->references('id')
                    ->on('users');

            $table->foreign('aula_id')
                    ->references('id')
                    ->on('aulas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('views');
    }
};
