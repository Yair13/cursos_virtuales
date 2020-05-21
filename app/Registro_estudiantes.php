<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Registro_estudiantes extends Model 
{
    
    use SoftDeletes;

	protected $table = 'registro_estudiantes';

	protected $fillable = ['nombres' , 'apellidos' , 'email' , 'telefono' , 'programa','estado'];

	protected $dates = ['deleted_at'];




}