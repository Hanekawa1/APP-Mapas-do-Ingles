<?php

    session_start();

    $titulo = "Módulo: " . $_SESSION['numModulo'] . " Dia: " . $_SESSION['diaModulo'];

?>
<div class="page-header">
    <h3><?php echo $titulo; ?></h3>
</div>
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="well well-sm">
            <form class="form-horizontal" action="gravarAtividade05.php" method="post" novalidate>
                <fieldset>
                    <legend class="text-center">Atividade 5</legend>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="texto5">Texto</label>
                        <div class="col-md-9">
                            <input id="texto5" style="height:250px" name="texto5" type="text" placeholder="Texto da Atividade 5" class="form-control" 
                            <?php 
                                if (!empty($_SESSION['value_texto5'])) {
                                        echo "value = ' " . $_SESSION['value_texto5'] . "'";
                                        unset($_SESSION['value_texto5']);
                                    }
                            ?>
                            required>
                            <?php 
                                if (!empty($_SESSION['vazio_texto5'])) {
                                        echo $_SESSION['vazio_texto5'];
                                        unset($_SESSION['vazio_texto5']);
                                    }
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12 text-right">
                            <button type="submit" class="btn btn-primary btn-lg">Salvar</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="col-md-13 text-center">
            <a href="?pagina=home.php">
                <button type="submit" class="btn btn-primary btn-lg">Sair</button>
            </a>
        </div>
    </div>
</div>
<br>
<?php
                                        $sucesso = isset($_GET['sucesso']);
                                        if($sucesso){
                                    ?>


                                    <div class="alert alert-success" role="alert">
                                        <strong>Sucesso!</strong>
                                        Atividade salva com sucesso.
                                    </div>

                                    <?php
                                        }

                                        $erro = isset($_GET['erro']);
                                        if($erro){
                                    ?>

                                    <div class="alert alert-danger" role="alert">
                                        <strong>Erro!</strong>
                                       Erro no cadastro. Preencha novamente.
                                    </div>
                                    <?php
                                        }
                                    ?>