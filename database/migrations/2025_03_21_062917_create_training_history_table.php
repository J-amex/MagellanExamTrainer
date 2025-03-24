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
        Schema::create('training_history_table', function (Blueprint $table) {
            $table->id('training_id')->unique();; 
            $table->date('date');
            $table->time('time_finished');
            $table->string('training_title');
            $table->string('examiner');
            $table->time('time_limit');
            $table->string('score');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('training_history_table');
    }
};
