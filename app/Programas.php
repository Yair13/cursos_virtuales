<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Programas extends Model 
{
    
    use SoftDeletes;

	protected $table = 'programas';

	protected $fillable = ['codigo' , 'descripcion' ];

	protected $dates = ['deleted_at'];




}