<?php

namespace slccal\Models;

use Illuminate\Database\Eloquent\Model;

class Termometro extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'termometros';
    
    /**
     * Campos que podem ser atribuidos em massa
     * @var array 
     */
    protected $fillable = [
        'codigo',
        'marca',
        'modelo',
        'certificado',
        'frequencia'
    ];
    
    /**
     * Campos excluidos do modelo JSON.
     * @var array 
     */
    protected $hidden = ['id'];
}
