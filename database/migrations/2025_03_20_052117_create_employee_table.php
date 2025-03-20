<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('employee_table', function (Blueprint $table) {
            $table->id('emp_id'); 
            $table->string('emp_code')->unique();
            $table->string('password');
            $table->string('last_name');
            $table->string('first_name');
            $table->string('campaign');
            $table->string('department');
            $table->string('position');
            $table->string('user_type');
            $table->string('activity_status');
            $table->string('avg');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('employee_table');
    }
};
