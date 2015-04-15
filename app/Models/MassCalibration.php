<?php

namespace slccal\Models;

use Illuminate\Database\Eloquent\Model;

class MassCalibration extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'masscalibrations';
    
    /**
     * Campos que podem ser atribuidos em massa
     * @var array 
     */
    protected $fillable = [
        'codigo',
        'certificado',
        'frequencia',
        'proxima',
        'valor',
        'incerteza',
        'k',
        'unidade',
        'situacao',
        'observacoes'
    ];
    
    /**
     * Campos excluidos do modelo JSON.
     * @var array 
     */
    protected $hidden = ['id'];
}
