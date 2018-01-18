<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    public $timestamps = true; 
    
    protected $fillable = array('nome', 'cpf', 'endereco', 'numero', 'bairro', 'cidade', 'uf', 'telefone', 'celular', 'limite', 'status');
}
