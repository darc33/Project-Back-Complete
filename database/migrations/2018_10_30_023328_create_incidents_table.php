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
            $table->point('coordinate',191);
            $table->integer('status',191);
            $table->dateTime('inicial_datetime',191);
            $table->dateTime('final_datetime',191);
            //$table->string('imagen',191);
            $table->unsignedInteger('user_id',191);
            $table->unsignedInteger('typeincidenci_id',191);
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
