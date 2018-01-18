@extends('adminlte::page')

@section('title', 'Sistema D2')

@section('content_header')
    <h1>Listar Clientes</h1>
@stop

@section('content')


<table class="table table-striped table-hover" border="0" cellspacing="3" cellpadding="3">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Endereço</th>
            <th>Cidade / Estado</th>
            <th>Telefone / Celular</th>
            <th class="text-center">Limite</th>
            <th class="text-center">Status</th>
            <th class="text-center">Opções</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($clientes as $cliente): ?>
        <tr class="{{ $cliente->Quantidade < 5 ? 'info' : '' }}">
            <td><?php echo $cliente->nome; ?></td>
            <td><?php echo $cliente->endereco.", ".$cliente->numero." - ".$cliente->bairro; ?></td>
            <td><?php echo $cliente->cidade." - ".$cliente->uf; ?></td>
            <td><?php echo $cliente->telefone." / ".$cliente->celular; ?></td>
            <td class="text-right">R$ <?php echo number_format($cliente->limite,2,',','.'); ?></td>
            <td class="text-center"><?php
                if($cliente->status == 1) echo '<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>';
                else echo'<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>';
            ?></td>
            <td class="text-center">
                <a href="/clientes/editar/<?= $cliente->id ?>" title='Editar o Cliente'><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="/clientes/apagar/<?= $cliente->id ?>" title='Remover o Cliente'><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>




@stop