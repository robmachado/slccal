<?php

namespace slccal\Models;

use Illuminate\Database\Eloquent\Model;
 
class CalibrationCert extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'calibrationscert';
    
    /**
     * Campos que podem ser atribuidos em massa
     * @var array 
     */
    protected $fillable = [
        'certificado',
        'emissor',
        'rbc',
        'data',
        'pdf'
    ];
    
    /**
     * Campos excluidos do modelo JSON.
     * @var array 
     */
    protected $hidden = ['id'];
}
