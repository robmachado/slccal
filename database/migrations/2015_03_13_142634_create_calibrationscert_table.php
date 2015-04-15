<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalibrationscertTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'calibrationscert',
            function (Blueprint $table) {
                $table->increments('id');
                $table->string('certificado', 58)->unique();//numero do certificado
                $table->string('emissor', 150);//identificação do emissor
                $table->string('rbc', 10);//numero RBC do emissor
                $table->date('data');//data da calibração
                $table->text('pdf');//pdf do certificado em gzip/base64
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
        Schema::drop('calibrationscert');
    }
}
