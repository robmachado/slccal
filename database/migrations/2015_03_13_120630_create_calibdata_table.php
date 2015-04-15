<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalibdataTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'calibdata',
            function (Blueprint $table) {
                $table->increments('id');
                $table->integer('calibrations_id');//id da calibração
                $table->double('nominal', 12, 8);//valor nominal
                $table->double('v1', 12, 8);//valor da primeira medição
                $table->double('v2', 12, 8);//valor da segunda medição
                $table->double('v3', 12, 8);//valor da terceira medição
                $table->double('v4', 12, 8);//valor da quarta medição
                $table->double('v5', 12, 8);//valor da quinta medição
                $table->double('med', 12, 8);//valor da media
                $table->double('std', 12, 8);//valor do desvio padrão
                $table->double('real', 12, 8);//valor real
                $table->string('massas', 500);//lista de massas
                $table->double('erro', 12, 8);//valor do erro sistemático
                $table->double('incerteza', 12, 8);//valor da incerteza
                $table->double('k', 12, 8);//valor do k
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
        Schema::drop('calibdata');
    }

}
