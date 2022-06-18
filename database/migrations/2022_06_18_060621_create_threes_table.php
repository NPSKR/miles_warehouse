<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('threes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('school_id')->references('id')->on('ones');
            $table->foreignId('student_id')->references('id')->on('twos');           
            $table->string('telugu');
            $table->string('hindi');
            $table->string('english');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('threes');
    }
};
