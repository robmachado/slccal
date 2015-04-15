<?php

namespace slccal\Models;

use Illuminate\Database\Eloquent\Model;
 
class Device extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'devices';
    
    /**
     * Campos que podem ser atribuidos em massa
     * @var array 
     */
    protected $fillable = [
        'customer_id',
        'identificacao',
        'ativo',
        'tag',
        'serial',
        'fabricante',
        'modelo',
        'classe',
        'capacidade',
        'unidade',
        'divisao',
        'exatidao',
        'observacoes'
    ];
    
    /**
     * Campos excluidos do modelo JSON.
     * @var array 
     */
    protected $hidden = ['id'];
}
