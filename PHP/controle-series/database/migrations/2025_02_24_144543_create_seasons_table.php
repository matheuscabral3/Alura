<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('seasons', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger('number');

            // ------ 2 maneiras de criar o relacionamento. (PK e FK).
            // $table->unsignedBigInteger('series_id');
            // $table->foreign('series_id')->references('id')->on('series');
            // $table->foreignId('series_id')->constrained();

            // Quando deletar 1 série, será deletado as temporadas também.
            $table->foreignId('series_id')->constrained()->onDelete('cascade');
            // ------

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seasons');
    }
};
