<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasscalibrationscertTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'masscalibrationscert',
            function (Blueprint $table) {
                $table->increments('id');
                $table->string('certificado', 58);//numero do certificado
                $table->string('emissor', 150);//identificação do emissor
                $table->string('rbc', 10);//numero RBC do emissor
                $table->integer('frequencia');//frequencia de calibração
                $table->date('data');//data da calibração
                $table->date('proxima');//data da proxima calibração
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
        Schema::drop('masscalibrationscert');
    }
}
