<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMassclassesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'massclasses',
            function (Blueprint $table) {
                $table->increments('id');
                $table->string('classe', 8);//classe da massa
                $table->double('nominal', 12, 8);//valor nominal da massa
                $table->string('unidade', 4);//unidade da massa
                $table->double('tolerancia', 12, 8);//erro máximo adimissivel em mg
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
        Schema::drop('massclasses');
    }
}
