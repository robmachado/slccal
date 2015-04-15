<?php

namespace slccal\Models;

use Illuminate\Database\Eloquent\Model;
 
class Tolerancia extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tolerancias';
    
    /**
     * Campos que podem ser atribuidos em massa
     * @var array 
     */
    protected $fillable = ['classe', 'min', 'max', 'erro'];
    
    /**
     * Campos excluidos do modelo JSON.
     * @var array 
     */
    protected $hidden = ['id'];
}
