<?php

namespace slccal\Models;

use Illuminate\Database\Eloquent\Model;
 
class CalibData extends Model
{
    /**
     * Tabela usada pelo modelo.
     * @var string
     */
    protected $table = 'calibdata';
    
    /**
     * Campos que podem ser atribuidos em massa
     * @var array 
     */
    protected $fillable = [
        'calibrations_id',
        'nominal',
        'v1',
        'v2',
        'v3',
        'v4',
        'v5',
        'med',
        'std',
        'real',
        'massas',
        'erro',
        'incerteza',
        'k'
    ];
    
    /**
     * Campos excluidos do modelo JSON.
     * @var array 
     */
    protected $hidden = ['id'];
}
