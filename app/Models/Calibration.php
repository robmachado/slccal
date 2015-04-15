<?php

namespace slccal\Models;

use Illuminate\Database\Eloquent\Model;
 
class Calibration extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'calibrations';
    
    /**
     * Campos que podem ser atribuidos em massa
     * @var array 
     */
    protected $fillable = [
        'devices_id',
        'frequencia',
        'data',
        'proxima',
        'certmassas',
        'tecnico',
        'aprovacao',
        'antes',
        'observacoes',
        'termometros_codigo',
        'temperatura',
        'umidade'
    ];
    
    /**
     * Campos excluidos do modelo JSON.
     * @var array 
     */
    protected $hidden = ['id'];
}
