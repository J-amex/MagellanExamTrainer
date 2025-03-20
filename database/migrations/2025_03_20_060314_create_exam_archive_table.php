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
        Schema::create('exam_archive_table', function (Blueprint $table) {
            $table->id('exam_archive_id')->unique();; 
            $table->string('exam_title');
            $table->string('examiner');
            $table->string('time_limit');
            $table->string('times_taken');
            $table->string('failed_percentage');
            $table->string('ratings_avg');
            $table->string('survery_results');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exam_archive_table');
    }
};
