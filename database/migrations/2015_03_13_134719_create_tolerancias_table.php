<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToleranciasTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'tolerancias',
            function (Blueprint $table) {
                $table->increments('id');
                $table->string('classe', 4);//classe da balança
                $table->integer('min');//menor numero de divisões
                $table->integer('max');//maior numero de divisões
                $table->double('erro', 5, 3);//maior erro permitido em relação a exatidão
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
        Schema::drop('tolerancias');
    }
}
