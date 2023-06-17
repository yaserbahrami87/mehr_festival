<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFestivalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('festivals', function (Blueprint $table) {
            $table->id();
            $table->string('festival',200)->unique();
            $table->text('call')->nullable();
            $table->string('start_date','11')->nullable();
            $table->string('start_time','5')->nullable();
            $table->string('end_date','11')->nullable();
            $table->string('end_time','5')->nullable();
            $table->string('judgment_date_fa','11')->nullable();
            $table->string('judgment_time_fa','5')->nullable();
            $table->string('winner_date_fa','11')->nullable();
            $table->string('winner_time_fa','5')->nullable();
            $table->unsignedBigInteger('insert_user_id')->nullable();
            $table->foreign('insert_user_id')->on('users')->references('id')->onDelete('cascade');
            $table->tinyInteger('order')->nullable();
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
        Schema::dropIfExists('festivals');
    }
}
