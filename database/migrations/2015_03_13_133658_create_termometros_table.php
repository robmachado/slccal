<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTermometrosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'termometros',
            function (Blueprint $table) {
                $table->increments('id');
                $table->string('codigo', 20)->unique();//codigo do termometro
                $table->string('marca', 50);//fabricante do termometro
                $table->string('modelo', 50);//modelo do termometro
                $table->string('certificado', 58);//numero do certificado de calibração
                $table->integer('frequencia');//frequencia de calibração
                $table->timestamps();
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('termometros');
    }
}
