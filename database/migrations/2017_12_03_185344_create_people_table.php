<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cui');
            $table->string('name1');
            $table->string('name2');
            $table->string('name3');
            $table->string('lastName1');
            $table->string('lastName2');
            $table->string('lastName3');
            $table->enum('sex', ['masculino', 'femenino']);
            $table->string('nationality');
            $table->date('dateBirth'); 
            $table->string('placeBirth'); 
            $table->string('placeLive'); 
            $table->enum('civilStatus', ['soltero','soltera', 'casado', 'casada']);
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
        Schema::dropIfExists('people');
    }
}
