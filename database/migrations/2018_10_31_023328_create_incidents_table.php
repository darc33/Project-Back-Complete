<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncidentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incidents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',191);
            $table->string('description',191);
            $table->point('coordinate')->nullable();
            $table->integer('status');
            $table->dateTime('initial_datetime');
            $table->dateTime('final_datetime');
            $table->string('imagen',191)->nullable();
            $table->unsignedInteger('user_id')->nullable();
            $table->unsignedInteger('typeincidenci_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('typeincidenci_id')->references('id')->on('type_incidents')->onDelete('set null')->onUpdate('cascade');
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
        Schema::dropIfExists('incidents');
    }
}
