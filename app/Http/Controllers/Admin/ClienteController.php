<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cliente;

class ClienteController extends Controller
{
    public function cadastrar(){
        return view('admin.cliente.cadastrar');
    }
    
    public function editar(){
        //$id = Request::input('id', '1');
        $id = \Illuminate\Support\Facades\Request::route('id');
        //$cliente = Cliente::find($id);
        $cliente = DB::select('select * from clientes where id = ?', [$id]);
        return view('admin.cliente.editar')->with('cliente', $cliente);
    }
    
    public function listar(){
        $clientes = Cliente::all();
        return view('admin.cliente.listar')->with('clientes', $clientes);
    }
    
    public function gravar(){
        //$nome = \Illuminate\Support\Facades\Request::input('nome');
        //\Illuminate\Support\Facades\DB::insert('insert into clientes (nome) values (?)', array($nome));
        $dados = \Illuminate\Support\Facades\Request::all();
        $cliente = new Cliente($dados);
        //verifica se foi informado algum valor e Converte a moeda para gravar no banco de dados
        $cliente['limite'] = str_replace(',','.',str_replace('.','',$cliente['limite']));
        if(!is_numeric($cliente['limite'])){ $cliente['limite']=0;}
        //grava no banco de dados
        $cliente->save();
        return redirect('/clientes/cadastrar')->withInput();
    }
        
    public function apagar(){
        $id = \Illuminate\Support\Facades\Request::route('id');
        $cliente = Cliente::find($id);
        $cliente->delete();
        return redirect('/clientes/listar')->withInput(); //redireciona por url
    }
  
        
    public function atualizar(){
        $dados = \Illuminate\Support\Facades\Request::all();
        $cliente = new Cliente($dados);
        //verifica se foi informado algum valor e Converte a moeda para gravar no banco de dados
        $cliente['limite'] = str_replace(',','.',str_replace('.','',$cliente['limite']));
        if(!is_numeric($cliente['limite'])){ $cliente['limite']=0;}
        //grava no banco de dados
        DB::table('clientes')->where('id', $dados['id'])->update([
            'nome' => $cliente['nome'],
            'cpf' => $cliente['cpf'],
            'endereco' => $cliente['endereco'],
            'numero' => $cliente['numero'],
            'bairro' => $cliente['bairro'],
            'cidade' => $cliente['cidade'],
            'uf' => $cliente['uf'],
            'telefone' => $cliente['telefone'],
            'celular' => $cliente['celular'],
            'limite' => $cliente['limite'],
            'status' => $cliente['status']    
        ]);
        return redirect('/clientes/listar')->withInput(); //redireciona por url
    }
  
}
