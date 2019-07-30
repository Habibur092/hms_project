<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCancellationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cancellations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('booking_id');
            $table->datetime('arrival');
            $table->datetime('departure_date');
            $table->string('room_num');
            $table->string('customer_id');
            $table->string('breakfast');
            $table->string('nights');
            $table->datetime('book_time');
            $table->datetime('cancel_time');
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
        Schema::dropIfExists('cancellations');
    }
}
