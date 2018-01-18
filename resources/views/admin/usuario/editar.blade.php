@extends('adminlte::page')

@section('title', 'Sistema D2')

@section('content_header')

@stop

@section('content')

<div class=" col-sm-12">
        <!--Formulario-->
        <form class="form-horizontal" name='formulariousuario' id='formulariousuario' action="/usuarios/atualizar" enctype="application/x-www-form-urlencoded" method="post" >

            <div>
            <fieldset title='Informações do usuario' name='blocoform01' id='blocoform01'><legend>Informações do usuario</legend>

                <input type="hidden" name="id" value="" /> 
                <input type="hidden" name="_token" value=" {{ csrf_token() }} " />
                
                <div class="form-group">
                    <label class="control-label col-sm-1" for='nome'>Nome</label>
                    <div class="col-sm-5">
                        <input class="form-control" name='nome' type='text' size='50' title='Coloque o nome do Usuario' value='{{ $usuario[0]->nome }}' required>
                    </div>
                    
                    <label class="control-label col-sm-1" for='name'>Usuario</label>
                    <div class="col-sm-5">
                        <input class="form-control" name='name' type='text' size='50' title='Coloque o Usuario' value='{{ $usuario[0]->name }}'>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-sm-1" for='email'>Email</label>
                    <div  class="col-sm-5">
                        <input class="form-control" name='email' type='text' size='50' title='Coloque o Email do Usuário' value='{{ $usuario[0]->email }}'>
                    </div>
                    
                    <label class="control-label col-sm-1" for='password'>Senha</label>
                    <div class="col-sm-5">
                        <input class="form-control" name='password' type='password' size='50' title='Coloque a senha do Usuário' value='{{ $usuario[0]->password }}'>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-1" for='permissao'>Permissão</label>
                    <div  class="col-sm-4">
                    <select class="form-control" name="permissao" title='Escolha o status do Usuario'>
                        <option value="A" selected>Administrador</option> 
                        <option value="U">Vendedor</option> 
                    </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-sm-1" for='status'>Status</label>
                    <div  class="col-sm-4">
                    <select class="form-control" name="status" title='Escolha o status do Usuario' >
                        <option value=1 selected>Ativo</option> 
                        <option value=0>Inativo</option> 
                    </select>
                    </div>
                </div>
             
                
                <div class="control-label col-sm-4" ></div>
                <div class="control-label col-sm-4" >
                <button class="btn btn-lg btn-success btn-block" type='submit' id='botaogravar' title='Aperte este botão para gravar os dados.'>Gravar</button>
                </div>
                <div class="control-label col-sm-4" ></div>
            </fieldset>
            </div>
        </form>
    </div>


@stop