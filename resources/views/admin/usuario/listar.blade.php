@extends('adminlte::page')

@section('title', 'Sistema D2')

@section('content_header')
    <h1>Listar usuarios</h1>
@stop

@section('content')


<table class="table table-striped table-hover" border="0" cellspacing="3" cellpadding="3">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Usuário</th>
            <th>Email</th>
            <th>Permissão</th>
            <th class="text-center">Status</th>
            <th class="text-center">Último Login</th>
            <th class="text-center">Opções</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($usuarios as $usuario): ?>
        <tr>
            <td><?php echo $usuario->nome; ?></td>
            <td><?php echo $usuario->name; ?></td>
            <td><?php echo $usuario->email; ?></td>
            <td><?php echo $usuario->permissao; ?></td>
            <td class="text-center"><?php
                if($usuario->status == 1) echo '<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>';
                else echo'<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>';
            ?></td>
            <td class="text-right"><?php echo $usuario->ultimologin; ?></td>
            <td class="text-center">
                <a href="/usuarios/editar/<?= $usuario->id ?>" title='Editar o usuario'><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="/usuarios/apagar/<?= $usuario->id ?>" title='Remover o usuario'><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>




@stop