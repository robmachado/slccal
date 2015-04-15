<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalibrationsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'calibrations',
            function (Blueprint $table) {
                $table->increments('id');//id da calibração e numero do certificado
                $table->integer('devices_id');//id do equipamento
                $table->integer('frequencia');//frequencia de calibração
                $table->date('data');//data da calibração
                $table->date('proxima');//data da proxima calibração
                $table->string('certmassas', 500);//ids dos certificados de calibração das massas separados por pipe
                $table->string('tecnico', 250);//nome do técnico responsável
                $table->string('aprovacao', 250);//nome do aprovador
                $table->text('antes');//observações antes da calibração
                $table->text('observacoes');//observações
                $table->string('termometros_codigo', 20);//table termometros codigo
                $table->double('temperatura', 12, 8);//temperatura em graus Celsios
                $table->double('umidade', 12, 8);//humidade relativa em %
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
        Schema::drop('calibrations');
    }

}
