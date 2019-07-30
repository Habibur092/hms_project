<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('customer_id');
            $table->string('fname', 50);
            $table->string('lname', 50);
            $table->string('address', 50);
            $table->string('postal_code', 50);
            $table->string('city', 50);
            $table->string('country', 50);
            $table->string('email', 50);
            $table->string('phone', 50);
            $table->string('reg_time', 50);
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
        Schema::dropIfExists('customers');
    }
}
