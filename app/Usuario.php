<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'users';
    public $timestamps = true; 
    
    protected $fillable = array('nome', 'name', 'email', 'password', 'permissao', 'status', 'ultimologin');
}
