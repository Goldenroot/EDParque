<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->string('PartitionKey');
            $table->string('AnoLectivo');
            $table->string('AgrupamentoEscolas');
            $table->string('NomeEstabelecimento');
            $table->string('Tipologia');
            $table->string('Morada');
            $table->string('CodPostal');
            $table->string('JuntaFreguesia');
            $table->string('Contacto');
            $table->string('Site');
            $table->longText('Background');
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
        Schema::dropIfExists('schools');
    }
}
