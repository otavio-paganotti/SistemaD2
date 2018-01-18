<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\usuario;

class usuarioController extends Controller
{
    public function cadastrar(){
        return view('admin.usuario.cadastrar');
    }
    
    public function editar(){
        //$id = Request::input('id', '1');
        $id = \Illuminate\Support\Facades\Request::route('id');
        //$usuario = usuario::find($id);
        $usuario = DB::select('select * from users where id = ?', [$id]);
        return view('admin.usuario.editar')->with('usuario', $usuario);
    }
    
    public function listar(){
        $usuarios = usuario::all();
        return view('admin.usuario.listar')->with('usuarios', $usuarios);
    }
    
    public function gravar(){
        //$nome = \Illuminate\Support\Facades\Request::input('nome');
        //\Illuminate\Support\Facades\DB::insert('insert into usuarios (nome) values (?)', array($nome));
        $dados = \Illuminate\Support\Facades\Request::all();
        $usuario = new Usuario($dados);
        $usuario->password = bcrypt($usuario->password);
        $usuario->save();
        return redirect('/usuarios/cadastrar')->withInput();
    }
        
    public function apagar(){
        $id = \Illuminate\Support\Facades\Request::route('id');
        $usuario = usuario::find($id);
        $usuario->delete();
        return redirect('/usuarios/listar')->withInput(); //redireciona por url
    }
  
    // Não está atualizando o BD   
    public function atualizar(){
        $dados = \Illuminate\Support\Facades\Request::all();
        $usuario = new Usuario($dados);
        //grava no banco de dados
        DB::table('users')->where('id', $dados['id'])->update([
            'nome' => $usuario['nome']  
        ]);
        var_dump($dados);
        echo "<br><br>";
        var_dump($usuario);
        //return redirect('/usuarios/listar')->withInput(); //redireciona por url
    }
  
}
