<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eqs', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');


              //---------------foreign key of user id for Equipment  -------------//
              $table->integer('eq_id')->unsigned();
              $table->foreign('eq_id')->references('id')->on('users');

              $table->string('owner_name');
              $table->string('nationality_owner');
              $table->string('type_eq');
              $table->string('pic_las');
              $table->double('price');
              $table->string('phone');
              $table->string('comapny_name')->nullable();

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
        Schema::dropIfExists('eqs');
    }
}
