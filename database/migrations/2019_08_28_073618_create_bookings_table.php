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
            $table->engine = 'InnoDB';

            $table->increments('id');

              //---------------foreign key of user id for enginner -------------//
              $table->integer('eng_id')->unsigned();
              $table->foreign('eng_id')->references('id')->on('engs');
                //---------------foreign key of user id for Equipment -------------//
             $table->integer('eq_id')->unsigned();
             $table->foreign('eq_id')->references('id')->on('eqs');

             $table->string('status');

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
