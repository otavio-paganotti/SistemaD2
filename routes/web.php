<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
 * 
 */

//Route::get('/', 'SiteController@index');
//$this->get('/', 'Site\SiteController@index')->name('home');


Route::get('/', function () {
    return redirect('/login');
});

$this->group(['middleware' => ['auth'], 'namespace' => 'Admin'], function(){
    $this->get('admin', 'AdminController@index')->name('admin.home');
    
    $this->get('/clientes/cadastrar', 'ClienteController@cadastrar');
    $this->get('/clientes/editar/{id}', 'ClienteController@editar');
    $this->get('/clientes/listar', 'ClienteController@listar');
    $this->post('/clientes/gravar', 'ClienteController@gravar');
    $this->get('/clientes/apagar/{id}', 'ClienteController@apagar');
    $this->post('/clientes/atualizar', 'ClienteController@atualizar');
    
    
    $this->get('/produtos/cadastrar', 'ProdutoController@cadastrar');
    $this->get('/produtos/editar/{id}', 'ProdutoController@editar');
    $this->get('/produtos/listar', 'ProdutoController@listar');
    $this->post('/produtos/gravar', 'ProdutoController@gravar');
    $this->get('/produtos/apagar/{id}', 'ProdutoController@apagar');
    $this->post('/produtos/atualizar', 'ProdutoController@atualizar');
    
    $this->get('/estoque/cadastrar', 'EstoqueController@cadastrar');
    $this->get('/estoque/editar', 'EstoqueController@editar');
    $this->get('/estoque/listar', 'EstoqueController@listar');
    
    $this->get('/pedidos/cadastrar', 'PedidoController@cadastrar');
    $this->get('/pedidos/editar', 'PedidoController@editar');
    $this->get('/pedidos/listar', 'PedidoController@listar');
    
    $this->get('/contasapagar/cadastrar', 'ContasapagarController@cadastrar');
    $this->get('/contasapagar/editar', 'ContasapagarController@editar');
    $this->get('/contasapagar/listar', 'ContasapagarController@listar');
    
    $this->get('/contasareceber/cadastrar', 'ContasareceberController@cadastrar');
    $this->get('/contasareceber/editar', 'ContasareceberController@editar');
    $this->get('/contasareceber/listar', 'ContasareceberController@listar');

    $this->get('/usuarios/cadastrar', 'UsuarioController@cadastrar');
    $this->get('/usuarios/editar/{id}', 'UsuarioController@editar');
    $this->get('/usuarios/listar', 'UsuarioController@listar');
    $this->post('/usuarios/gravar', 'UsuarioController@gravar');
    $this->get('/usuarios/apagar/{id}', 'UsuarioController@apagar');
    $this->post('/usuarios/atualizar', 'UsuarioController@atualizar');
});


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

