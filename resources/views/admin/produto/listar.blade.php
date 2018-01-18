@extends('adminlte::page')

@section('title', 'Sistema D2')

@section('content_header')
    <h1>Listar Produtos</h1>
@stop

@section('content')


<table class="table table-striped table-hover" border="0" cellspacing="3" cellpadding="3">
    <thead>
        <tr>
            <th>Nome</th>
            <th class="text-center">Valor</th>
            <th class="text-center">Quantidade</th>
            <th class="text-center">Status</th>
            <th class="text-center">Opções</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($produtos as $produto): ?>
        <tr class="{{ $produto->Quantidade < 5 ? 'info' : '' }}">
            <td><?php echo $produto->nome; ?></td>
           <td class="text-center">R$ <?php echo number_format($produto->valor,2,',','.'); ?></td>
           <td class="text-center"><?php echo number_format($produto->quantidade,2,',','.'); ?></td>
            <td class="text-center"><?php
                if($produto->status == 1) echo '<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>';
                else echo'<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>';
            ?></td>
            <td class="text-center">
                <a href="/produtos/editar/<?= $produto->id ?>" title='Editar o Produto'><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="/produtos/apagar/<?= $produto->id ?>" title='Remover o Produto'><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>




@stop