<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoraireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horaire', function (Blueprint $table) {
            $table->increments('id');
			$table->string('jour');
			$table->dateTime('debut');
			$table->dateTime('fin');
			$table->unsignedInteger('session_id');
            $table->timestamps();
			
			//$table->foreign('id_session')->references('id')->on('session');
			
			$table->engine = 'InnoDB';
			$table->charset = 'utf8';
			$table->collation = 'utf8_unicode_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('horaire');
    }
}
