<?php

namespace slccal\Models;

use Illuminate\Database\Eloquent\Model;
 
class Customer extends Model
{
    /**
     * Tabela usada pelo modelo.
     * @var string
     */
    protected $table = 'customers';
    
    /**
     * Campos que podem ser atribuidos em massa
     * @var array 
     */
    protected $fillable = [
        'fantasia',
        'razao',
        'cnpj',
        'ie',
        'logradouro',
        'numero',
        'complemento',
        'bairro',
        'municipio',
        'uf',
        'cep',
        'telefone',
        'contato',
        'observacoes'
    ];
    
    /**
     * Campos excluidos do modelo JSON.
     * @var array 
     */
    protected $hidden = ['id'];
}
