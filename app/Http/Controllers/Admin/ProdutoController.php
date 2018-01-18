<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Produto;

class ProdutoController extends Controller
{
    
    public function cadastrar(){
        return view('admin.produto.cadastrar');
    }
    
    public function editar(){
        //$id = Request::input('id', '1');
        $id = \Illuminate\Support\Facades\Request::route('id');
        //$produto = Produto::find($id);
        $produto = DB::select('select * from produtos where id = ?', [$id]);
        return view('admin.produto.editar')->with('produto', $produto);
    }
    
    public function listar(){
        $produtos = Produto::all();
        return view('admin.produto.listar')->with('produtos', $produtos);
    }
    
    public function gravar(){
        //$nome = \Illuminate\Support\Facades\Request::input('nome');
        //\Illuminate\Support\Facades\DB::insert('insert into produtos (nome) values (?)', array($nome));
        $dados = \Illuminate\Support\Facades\Request::all();
        $produto = new Produto($dados);
        //verifica se foi informado algum valor e Converte a moeda para gravar no banco de dados
        $produto['valor'] = str_replace(',','.',str_replace('.','',$produto['valor']));
        if(!is_numeric($produto['valor'])){ $produto['valor']=0;}
        $produto['quantidade'] = str_replace(',','.',str_replace('.','',$produto['quantidade']));
        if(!is_numeric($produto['quantidade'])){ $produto['quantidade']=0;}
        //grava no banco de dados
        $produto->save();
        return redirect('/produtos/cadastrar')->withInput();
    }
        
    public function apagar(){
        $id = \Illuminate\Support\Facades\Request::route('id');
        $produto = Produto::find($id);
        $produto->delete();
        return redirect('/produtos/listar')->withInput(); //redireciona por url
    }
  
        
    public function atualizar(){
        $dados = \Illuminate\Support\Facades\Request::all();
        $produto = new Produto($dados);
        //verifica se foi informado algum valor e Converte a moeda para gravar no banco de dados
        $produto['valor'] = str_replace(',','.',str_replace('.','',$produto['valor']));
        if(!is_numeric($produto['valor'])){ $produto['valor']=0;}
        
        $produto['quantidade'] = str_replace(',','.',str_replace('.','',$produto['quantidade']));
        if(!is_numeric($produto['quantidade'])){ $produto['quantidade']=0;}
        
        //grava no banco de dados
        DB::table('produtos')->where('id', $dados['id'])->update([
            'nome' => $produto['nome'],
            'valor' => $produto['valor'],
            'quantidade' => $produto['quantidade'],
            'status' => $produto['status']    
        ]);
        return redirect('/produtos/listar')->withInput(); //redireciona por url
    }
  
}
