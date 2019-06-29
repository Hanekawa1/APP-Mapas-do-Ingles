<div class="page-header">
    <h3>Selecionar Módulo</h3>
 </div>
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="well well-sm">
            <form class="form-horizontal" action="salvaIDs.php" method="post" novalidate>
                <fieldset>
                    <legend class="text-center">Módulo</legend>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="idModulo">Número do Módulo:</label>
                        <div class="col-md-9">
                            <input id="idModulo"  name="idModulo" type="text" placeholder="Número do Módulo" class="form-control" 
                            <?php 
                                    if (!empty($_SESSION['value_idModulo'])) {
                                        echo "value = ' " . $_SESSION['value_idModulo'] . "'";
                                        unset($_SESSION['value_idModulo']);
                                    }
                            ?>
                            required>
                            <?php 
                                    if (!empty($_SESSION['vazio_idModulo'])) {
                                        echo $_SESSION['vazio_idModulo'];
                                        unset($_SESSION['vazio_idModulo']);
                                    }
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="idDia">Dia do Módulo</label>
                        <div class="col-md-9">
                            <input id="idDia"  name="idDia" type="number" placeholder="Dia Módulo" class="form-control" 
                            <?php 
                                    if (!empty($_SESSION['value_idDia'])) {
                                        echo "value = ' " . $_SESSION['value_idDia'] . "'";
                                        unset($_SESSION['value_idDia']);
                                    }
                            ?>
                            required>
                            <?php 
                                    if (!empty($_SESSION['vazio_idDia'])) {
                                        echo $_SESSION['vazio_idDia'];
                                        unset($_SESSION['vazio_idDia']);
                                    }
                            ?>
                        </div>
                    </div>
                    <div class="text-right">        
                        <button class="btn btn-primary" type="submit">Nova Atividade</button> 
                    </div>
                </fieldset>
            </form>

        </div>        
    </div>
</div>
<?php
    $erro = isset($_GET['erros']);
     if($erro){
     ?>

       <div class="alert alert-danger" role="alert">
        <strong>Erro!</strong>
        Favor preencher os campos.
</div>
<?php
    }
?>
<?php
    $erro = isset($_GET['erro']);
     if($erro){
     ?>

       <div class="alert alert-danger" role="alert">
        <strong>Erro!</strong>
        Módulo não cadastrado. Favor cadastrar módulo.
</div>
<?php
    }
?>
<?php
    $erro = isset($_GET['error']);
     if($erro){
     ?>

       <div class="alert alert-danger" role="alert">
        <strong>Erro!</strong>
        O dia selecionado ultrapassa o limite de 7 dias por semana/módulo. Favor preencher novamente.
</div>
<?php
    }
?>