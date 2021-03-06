<?php

namespace slccal\Models;

use Illuminate\Database\Eloquent\Model;
 
class Colecao extends Model
{
    /**
     * Tabela usada pelo modelo.
     * @var string
     */
    protected $table = 'colecoes';
    
    /**
     * Campos que podem ser atribuidos em massa
     * @var array 
     */
    protected $fillable = ['colecao'];
    
    /**
     * Campos excluidos do modelo JSON.
     * @var array 
     */
    protected $hidden = ['id'];
}
