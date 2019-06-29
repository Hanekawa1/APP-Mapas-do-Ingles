<?php  

    $con = conecta();

    $res = mysqli_query($con, "SELECT m1.idmodulo, d1.iddia, m1.nomemodulo, 
     a1.cadastroAtividade01,
     a2.cadastroAtividade02, 
     a3.cadastroAtividade03, 
     a4.cadastroAtividade04, 
     a5.cadastroAtividade05 FROM atividade01 as a1
     inner join modulo as m1
         on a1.idmodulo = m1.idmodulo
     inner join dia as d1
         on a1.iddia = d1.iddia
     inner join atividade02 as a2
         on a2.idmodulo = m1.idmodulo
             and a2.iddia = d1.iddia
     inner join atividade03 as a3
         on a3.idmodulo = m1.idmodulo
             and a3.iddia = d1.iddia
     inner join atividade04 as a4
         on a4.idmodulo = m1.idmodulo
             and a4.iddia = d1.iddia
     inner join atividade05 as a5
         on a5.idmodulo = m1.idmodulo
             and a5.iddia = d1.iddia");
?>

<div class="page-header">
     <h3>Atividades Já Cadastradas</h3>
</div>
<div class="row">
    <div class="panel panel-primary filterable">
        <div class="panel-heading">
            <h3 class="panel-title">Status das Atividades</h3>
            <div class="pull-right">
                <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr class="filters">
                    <th><input type="text" class="form-control" placeholder="Módulo" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Nome"disabled></th> 
                    <th><input type="text" class="form-control" placeholder="Dia" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Atividade 1" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Atividade 2" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Atividade 3" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Atividade 4" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Atividade 5" disabled></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($res as $dado) {
                ?>
                
                <tr>
                    <td><?php echo $dado['idmodulo']; ?></td>
                    <td><?php echo $dado['nomemodulo']; ?></td>
                    <td><?php echo $dado['iddia']; ?></td>
                    <td><?php echo ok($dado['cadastroAtividade01']); ?></td>
                    <td><?php echo ok($dado['cadastroAtividade02']); ?></td>
                    <td><?php echo ok($dado['cadastroAtividade03']); ?></td>
                    <td><?php echo ok($dado['cadastroAtividade04']); ?></td>
                    <td><?php echo ok($dado['cadastroAtividade05']); ?></td>              
                <?php
                     }
                ?>
            </tbody>
        </table>
    </div>
    <div class="text-right">
    <a href="?pagina=cadastrarAtividades">
        <button class="btn btn-primary">Nova Atividade</button>
    </a>
    </div>
</div>