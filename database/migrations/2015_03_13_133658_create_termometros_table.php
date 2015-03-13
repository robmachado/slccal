<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTermometrosTable extends Migration {

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
                $table->string('codigo', 20);//codigo do termometro
                $table->string('certificado', 20);//numero do certificado de calibração
                $table->string('calibrador', 250);//laboratório de calibração
                $table->date('data');
                $table->date('validade');
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
