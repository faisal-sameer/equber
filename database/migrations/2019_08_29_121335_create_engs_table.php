<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEngsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('engs', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');//id of Eng request 

             //---------------foreign key of user id for enginner -------------//
             $table->integer('eng_id')->unsigned();
             $table->foreign('eng_id')->references('id')->on('users');
             $table->string('company_name');

             $table->string('phone_1');
             $table->string('phone_2')->nullable();
             $table->string('Tel')->nullable();
             $table->string('customer_name');
              $table->string('project_name');
              $table->string('location');
              $table->string('image_card');
              $table->string('date_from');
              $table->string('date_to');
             

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
        Schema::dropIfExists('engs');
    }
}
