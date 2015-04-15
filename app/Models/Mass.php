<?php

namespace slccal\Models;

use Illuminate\Database\Eloquent\Model;
 
class Mass extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'masses';
    
    /**
     * Campos que podem ser atribuidos em massa
     * @var array 
     */
    protected $fillable = [
        'codigo',
        'colecao',
        'classe',
        'material',
        'nominal',
        'unidade',
        'frequencia',
        'situacao',
        'observacoes'
    ];
    
    /**
     * Campos excluidos do modelo JSON.
     * @var array 
     */
    protected $hidden = ['id'];
}
