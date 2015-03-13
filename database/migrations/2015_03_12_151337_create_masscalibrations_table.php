<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasscalibrationsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'masscalibrations',
            function (Blueprint $table) {
                $table->increments('id');//id da calibração da massa padrão
                $table->integer('masscalibratioscert_id');//id da do certificado ce calibração da coleção de massas
                $table->string('codigo', 8);//codigo da massa padrão
                $table->double('valor', 12, 8);//valor real obtido na calibração menor ou igual a 2/3 da tolernacia para a classe
                $table->double('incerteza', 12, 8);//valor da incerteza na calibração menor ou igual a 1/3 da tolerancia
                $table->integer('k');//valor do k referente a calibração
                $table->string('unidade', 4);//unidade da massa
                $table->boolean('situacao');//status da massa valida ou invalida
                $table->text('observacoes'); //informações adicionais
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
        Schema::drop('masscalibrations');
    }
}
