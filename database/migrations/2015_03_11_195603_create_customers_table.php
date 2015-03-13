<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'customers',
            function (Blueprint $table) {
                $table->increments('id');//id do cliente
                $table->string('fantasia', 25)->unique();//fantasia
                $table->string('razao', 225);//razao social
                $table->string('cnpj', 14)->unique();//CNPJ
                $table->string('ie', 14);//IE
                $table->string('logradouro', 225);//logradouro
                $table->string('numero', 25);//numero
                $table->string('complemento', 225);//complemento
                $table->string('bairro', 225);//bairro
                $table->string('municipio', 225);//municipio
                $table->string('uf', 2);//sigla da Federação
                $table->string('cep', 25);//cep
                $table->string('telefone', 125);//telefone
                $table->string('contato', 225);//contato
                $table->text('observacoes');//observações
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
        Schema::drop('customers');
    }
}
