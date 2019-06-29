<?php  
    session_start();
    $con = conecta();

    $res = mysqli_query($con, 'SELECT * FROM cadastros');
?>

<div class="page-header">
                <h3>Usuários Cadastrados</h3>
            </div>
<div class="row">
    <div class="panel panel-primary filterable">
        <div class="panel-heading">
            <h3 class="panel-title">Lista de Usuários</h3>
            <div class="pull-right">
                <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr class="filters">
                    <th><input type="text" class="form-control" placeholder="Id" disabled></th>
                    <th><input type="text" class="form-control" placeholder="CPF" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Usuário" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Senha" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Módulo Inicial" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Data Expiração" disabled></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($res as $dado) {
                    
                ?>

                <tr>
                    <td><?php echo $dado['idUsuario']; ?></td>
                    <td><?php echo $dado['cpf']; ?></td> 
                    <td><?php echo $dado['email']; ?></td>
                    <td><?php echo $dado['senha']; ?></td>
                    <td><?php echo $dado['moduloInicial']; ?></td>
                    <td><?php echo $dado['expiracaoConta']; ?></td>
                    
                <?php

                     }
                ?>
            </tbody>
        </table>
    </div>
    <div class="text-right">
        <a href="?pagina=cadastrarUsuarios">
            <button class="btn btn-primary">Novo Usuário</button>
        </a>
        <a href="?pagina=editaUsuario"><button class="btn btn-primary">Editar Usuário</button></a>
    </div>
</div>