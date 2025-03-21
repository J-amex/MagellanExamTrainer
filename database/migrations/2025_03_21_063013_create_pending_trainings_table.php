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
        Schema::create('pending_trainings_table', function (Blueprint $table) {
            $table->id('pending_id')->unique();; 
            $table->string('date');
            $table->string('time_given');
            $table->string('training_title');
            $table->string('examiner');
            $table->string('time_limit');
            $table->decimal('status',5,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pending_trainings');
    }
};
