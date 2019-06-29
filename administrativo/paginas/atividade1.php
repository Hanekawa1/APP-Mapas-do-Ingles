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
                            <form class="form-horizontal" action="gravarAtividade01.php" method="post" novalidate>
                                <fieldset>
                                    <legend class="text-center">Atividade 1</legend>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="texto1">Texto</label>
                                        <div class="col-md-9">
                                            <input id="texto1" style="height:100px" name="texto1" type="text" placeholder="Texto da Atividade 1" class="form-control" 
                                            <?php 
                                                if (!empty($_SESSION['value_texto1'])) {
                                                    echo "value = ' " . $_SESSION['value_texto1'] . "'";
                                                    unset($_SESSION['value_texto1']);
                                                }
                                             ?>
                                            required>
                                            <?php 
                                                if (!empty($_SESSION['vazio_texto1'])) {
                                                    echo $_SESSION['vazio_texto1'];
                                                    unset($_SESSION['vazio_texto1']);
                                                }
                                             ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="audio1">Áudio</label>
                                        <div class="col-md-9">
                                            <input id="audio1" name="audio1" type="text" placeholder="Áudio da Atividade 01 (URL)" class="form-control"
                                            <?php 
                                                if (!empty($_SESSION['value_audio1'])) {
                                                    echo "value = ' " . $_SESSION['value_audio1'] . "'";
                                                    unset($_SESSION['value_audio1']);
                                                }
                                             ?> required>
                                            <?php 
                                                if (!empty($_SESSION['vazio_audio1'])) {
                                                    echo $_SESSION['vazio_audio1'];
                                                    unset($_SESSION['vazio_audio1']);
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
                            <a href="?pagina=atividade2">
                                <button type="submit" class="btn btn-primary btn-lg">Proxima Atividade</button>
                            </a>
                        </div>
                    </div>
                </div>
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