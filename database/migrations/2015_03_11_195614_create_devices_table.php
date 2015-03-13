<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevicesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'devices',
            function (Blueprint $table) {
                $table->increments('id');//id do dispositivo do cliente
                $table->integer('customer_id');//ide do proprietário
                $table->string('identificacao', 200);//numero de identificacao
                $table->string('ativo', 200);//numero do ativo
                $table->string('tag', 200);//identificação de posição
                $table->string('serial', 200);//numero dde serie
                $table->string('fabricante', 200);//fabricante
                $table->string('modelo', 200);//modelo
                $table->string('classe', 12);//classe da balança
                $table->double('capacidade', 12, 8);//capacidade máxima
                $table->string('unidade', 2);//unidade
                $table->double('divisao', 12, 8);//menor divisao
                $table->double('exatidao', 12, 8);//melhor exatidão
                $table->text('observacoes');//observações sobre o equipamento
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
        Schema::drop('devices');
    }
}
