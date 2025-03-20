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
        Schema::create('exams_table', function (Blueprint $table) {
            $table->id('exam_id'); 
            $table->string('exam_title')->unique();
            $table->date('date');
            $table->time('time_limit');
            $table->string('file_path');
            $table->text('question');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exams_table');
    }
};
