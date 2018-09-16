<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatcoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catcours', function (Blueprint $table) {
			$table->unsignedInteger('cours_id');
			$table->unsignedInteger('categorie_id');
			$table->primary(['cours_id', 'categorie_id']);
			//$table->foreign('id_cours')->references('id')->on('cours');
			//$table->foreign('id_categorie')->references('id')->on('categorie');
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
        Schema::dropIfExists('catcours');
    }
}
