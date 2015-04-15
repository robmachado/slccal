<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMassesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'masses',
            function (Blueprint $table) {
                $table->increments('id');
                $table->string('codigo', 8)->unique(); //codigo da massa
                $table->string('colecao', 8); //codigo da coleção
                $table->string('classe', 8);//classe da massa
                $table->string('material', 60);//material da massa
                $table->double('nominal', 12, 8);//capacidade nominal da massa
                $table->string('unidade', 4);//unidade da massa
                $table->integer('frequencia'); //frequencia de calibração
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
        Schema::drop('mass');
    }
}
