<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('fname',100)->nullable();
            $table->string('lname',100)->nullable();
            $table->string('email',200)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password',200)->nullable();
            $table->string('tel',11)->unique();
            $table->tinyInteger('type')->default(1);
            $table->boolean('is_admin')->default(0);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
