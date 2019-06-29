<?php  

    $con = conecta();

    $res = mysqli_query($con, 'SELECT * FROM modulo');
?>

<div class="page-header">
                <h3>Módulos Cadastrados</h3>
            </div>
<div class="row">
    <div class="panel panel-primary filterable">
        <div class="panel-heading">
            <h3 class="panel-title">Lista de Módulos</h3>
            <div class="pull-right">
                <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr class="filters" >
                    <th><input type="text" class="form-control" placeholder="Número do módulo" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Nome do módulo" disabled></th>
            </thead>
            <tbody>
                <?php
                    foreach ($res as $dado) {
                    
                ?>

                <tr >
                    <td><?php echo $dado['idModulo']; ?></td>
                    <td><?php echo $dado['nomeModulo']; ?></td>
                    <td><a href="?pagina=editaModulo"> <button class="btn btn-primary">Editar</button> </a></td>
                <?php
                    /*colocar edição (update)*/
                     }
                ?>
            </tbody>
        </table>
    </div>
    <div class="text-right">
        <a href="?pagina=cadastrarModulo">
            <button class="btn btn-primary">Novo Módulo</button>
        </a>
    </div>
</div>