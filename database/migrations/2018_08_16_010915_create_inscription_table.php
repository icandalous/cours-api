<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInscriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscription', function (Blueprint $table) {
			$table->unsignedInteger('session_id');
			$table->unsignedInteger('etudiant_id');
			$table->primary(['session_id', 'etudiant_id']);
			//$table->foreign('id_session')->references('id')->on('session');
			//$table->foreign('id_etudiant')->references('id')->on('etudiant');
            $table->timestamps();
			
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
        Schema::dropIfExists('inscription');
    }
}
