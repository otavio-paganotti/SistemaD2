@extends('adminlte::page')

@section('title', 'Sistema D2')

@section('content_header')
    
@stop

@section('content')

@if(old('nome'))
<div class="alert alert-success"> Adicionado: {{ old('nome') }} </div>
@endif

<div class=" col-sm-12">
        <!--Formulario-->
        <form class="form-horizontal" name='formularioproduto' id='formularioproduto' action="/produtos/gravar" enctype="application/x-www-form-urlencoded" method="post" >

            <div>
            <fieldset title='Informações do Produto' name='blocoform01' id='blocoform01'><legend>Informações do Produto</legend>
                

                <input type="hidden" name="_token" value=" {{ csrf_token() }} " />
                
                <div class="form-group">
                    <label class="control-label col-sm-2" for='nome'>Nome</label>
                    <div class="col-sm-6">
                        <input class="form-control" name='nome' type='text' size='50' title='Coloque o nome do produto' value='' required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-sm-2"  for='valor'>Valor</label>
                    <div  class="col-sm-3">
                        <input class="form-control" name='valor' type='text' size='10' title='Coloque o valor do produto' value='100,00'>
                    </div>
                </div>
                    
                <div class="form-group">    
                    <label class="control-label col-sm-2" for='quantidade'>Quantidade</label>
                    <div class="col-sm-2">
                        <input class="form-control" name='quantidade' type='number' size='5' title='Quantidade em estoque' value=''>
                    </div>
                </div>
                    
                <div class="form-group"> 
                    <label class="control-label col-sm-2" for='status'>Status</label>
                    <div  class="col-sm-4">
                    <select class="form-control" name="status" title='Escolha o status do Produto' >
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