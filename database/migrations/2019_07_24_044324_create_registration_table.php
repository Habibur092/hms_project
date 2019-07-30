<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registration', function (Blueprint $table) {
            $table->increments('customer_id');
            $table->string('title', 50);
            $table->string('fname', 50);
            $table->string('lname', 50);
            $table->string('password', 50);
            $table->tinyInteger('sex');
            $table->datetime('date_of_birth');
            $table->string('phone', 50);
            $table->string('email', 50);
            $table->string('address', 50);
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
        Schema::dropIfExists('registration');
    }
}
