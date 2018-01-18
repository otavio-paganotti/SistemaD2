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
        <form class="form-horizontal" name='formulariocliente' id='formulariocliente' action="/clientes/gravar" enctype="application/x-www-form-urlencoded" method="post" >

            <div>
            <fieldset title='Informações do Cliente' name='blocoform01' id='blocoform01'><legend>Informações do Cliente</legend>
                
                <input type="hidden" name="acao" id="acao" value="clientenovogravar" />
                <!-- <input type="hidden" name="id" value="" /> -->
                <input type="hidden" name="_token" value=" {{ csrf_token() }} " />
                
                <div class="form-group">
                    <label class="control-label col-sm-2" for='nome'>Nome</label>
                    <div class="col-sm-6">
                        <input class="form-control" name='nome' type='text' size='50' title='Coloque o nome do cliente' value='' required>
                    </div>
                    
                    <label class="control-label col-sm-1" for='cpf'>CPF</label>
                    <div class="col-sm-3">
                        <input class="form-control" name='cpf' type='text' size='50' title='Coloque o CPF do cliente' value=''>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-sm-2" for='endereco'>Endereço</label>
                    <div  class="col-sm-7">
                        <input class="form-control" name='endereco' type='text' size='50' title='Coloque a rua da casa' value=''>
                    </div>
                    
                    <label class="control-label col-sm-1" for='numero'>Número</label>
                    <div class="col-sm-2">
                        <input class="form-control" name='numero' type='number' size='5' title='Coloque o número da casa' value=''>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for='bairro'>Bairro / Complemento</label>
                    <div  class="col-sm-10">
                        <input class="form-control" name='bairro' type='text' size='50' title='Coloque o nome do bairro' value=''>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for='cidade'>Cidade</label>
                    <div  class="col-sm-4">
                        <input class="form-control" name='cidade' type='text' size='50' title='Coloque o nome da cidade' value='Dourados' required>
                    </div>
               
                    <label class="control-label col-sm-2" for='uf'>Estado</label>
                    <div  class="col-sm-4">
                    <select class="form-control" name="uf" id='uf' title='Escolha o Estado'> 
                        <option value="MS">Mato Grosso do Sul</option> 
                        <option value="AC">Acre</option> 
                        <option value="AL">Alagoas</option> 
                        <option value="AM">Amazonas</option> 
                        <option value="AP">Amapá</option> 
                        <option value="BA">Bahia</option> 
                        <option value="CE">Ceará</option> 
                        <option value="DF">Distrito Federal</option> 
                        <option value="ES">Espírito Santo</option> 
                        <option value="GO">Goiás</option> 
                        <option value="MA">Maranhão</option> 
                        <option value="MT">Mato Grosso</option> 
                        <option value="MG">Minas Gerais</option> 
                        <option value="PA">Pará</option> 
                        <option value="PB">Paraíba</option> 
                        <option value="PR">Paraná</option> 
                        <option value="PE">Pernambuco</option> 
                        <option value="PI">Piauí</option> 
                        <option value="RJ">Rio de Janeiro</option> 
                        <option value="RN">Rio Grande do Norte</option> 
                        <option value="RO">Rondônia</option> 
                        <option value="RS">Rio Grande do Sul</option> 
                        <option value="RR">Roraima</option> 
                        <option value="SC">Santa Catarina</option> 
                        <option value="SE">Sergipe</option> 
                        <option value="SP">São Paulo</option> 
                        <option value="TO">Tocantins</option> 
                    </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-sm-2"  for='telefone'>Telefone</label>
                    <div  class="col-sm-4">
                        <input class="form-control" name='telefone' type='text' size='20' title='Coloque o número do telefone' value='(67)'>
                    </div>
                    
                    <label class="control-label col-sm-2"  for='celular'>Celular</label>
                    <div  class="col-sm-4">
                        <input class="form-control" name='celular' type='text' size='20' title='Coloque o número do celular' value='(67)'>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-sm-2"  for='limite'>Limite</label>
                    <div  class="col-sm-4">
                        <input class="form-control" name='limite' type='text' size='10' title='Coloque o limite do cliente' value='100,00'>
                    </div>
                    
                    <label class="control-label col-sm-2" for='status'>Status</label>
                    <div  class="col-sm-4">
                    <select class="form-control" name="status" title='Escolha o status do Cliente' >
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