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
            <form class="form-horizontal" action="gravarAtividade04.php" method="post" novalidate>
                <fieldset>
                    <legend class="text-center">Atividade 4</legend>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="audio4">Áudio</label>
                        <div class="col-md-9">
                            <input id="audio4"  name="audio4" type="text" placeholder="Áudio da Atividade 4 (URL)" class="form-control" 
                            required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="fraseaudio4">Frase do Áudio</label>
                        <div class="col-md-9">
                            <input id="fraseaudio4" style="height:125px" name="fraseaudio4" type="text" placeholder="Frase que o Audio Apresenta" class="form-control" 
                            <?php 
                                if (!empty($_SESSION['value_fraseaudio4'])) {
                                        echo "value = ' " . $_SESSION['value_fraseaudio4'] . "'";
                                        unset($_SESSION['value_fraseaudio4']);
                                    }
                            ?>required>
                            <?php 
                                if (!empty($_SESSION['vazio_fraseaudio4'])) {
                                    echo $_SESSION['vazio_fraseaudio4'];
                                    unset($_SESSION['vazio_fraseaudio4']);
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
            <a href="?pagina=atividade5">
                <button type="submit" class="btn btn-primary btn-lg">Proxima Atividade</button>
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