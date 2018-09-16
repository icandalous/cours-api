<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cours', function (Blueprint $table) {
            $table->increments('id');
			$table->string('code')->unique();
			$table->string('titre');
			$table->text('description');
			$table->double('prix', 5, 2)->nullable();
			$table->unsignedInteger('organisateur_id');
            $table->timestamps();
			
			//$table->foreign('id_organisateur')->references('id')->on('organisateur')->onDelete('cascade');
			
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
        Schema::dropIfExists('cours');
    }
}
