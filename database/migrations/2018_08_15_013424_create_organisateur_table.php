<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganisateurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organisateur', function (Blueprint $table) {
            $table->increments('id');
			$table->string('nom')->unique();
            $table->string('email')->unique();
            $table->string('adresse');
			$table->string('telephone');
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
        Schema::dropIfExists('organisateur');
    }
}
