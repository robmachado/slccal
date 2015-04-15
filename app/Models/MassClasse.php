<?php

namespace slccal\Models;

use Illuminate\Database\Eloquent\Model;
 
class Massclasse extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'massclasses';
    
    /**
     * Campos que podem ser atribuidos em massa
     * @var array 
     */
    protected $fillable = ['classe', 'nominal', 'unidade', 'tolerancia'];
    
    /**
     * Campos excluidos do modelo JSON.
     * @var array 
     */
    protected $hidden = ['id'];
}
