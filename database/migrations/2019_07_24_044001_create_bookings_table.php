<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('booking_id');
            $table->integer('customer_id');
            $table->integer('room_num');
            $table->integer('breakfast');
            $table->integer('nights');
            $table->string('booktype');
            $table->datetime('book_time');
            $table->integer('no_of_nights');
            $table->datetime('arrival_date');
            $table->datetime('departure_date');
            $table->string('comment', 400);
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
        Schema::dropIfExists('bookings');
    }
}
