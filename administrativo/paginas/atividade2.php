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
                            <form class="form-horizontal" action="gravarAtividade02.php" method="post" novalidate>
                                <fieldset>
                                    <legend class="text-center">Atividade 2</legend>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="texto2">Texto</label>
                                        <div class="col-md-9">
                                            <input id="texto2" style="height:60px" name="texto2" type="text" placeholder="Texto da Atividade 2" class="form-control"
                                            <?php 
                                                if (!empty($_SESSION['value_texto2'])) {
                                                    echo "value = ' " . $_SESSION['value_texto2'] . "'";
                                                    unset($_SESSION['value_texto2']);
                                                }
                                             ?> required>
                                             <?php 
                                                if (!empty($_SESSION['vazio_texto2'])) {
                                                    echo $_SESSION['vazio_texto2'];
                                                    unset($_SESSION['vazio_texto2']);
                                                }
                                             ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="respostaC12">Resposta Correta</label>
                                        <div class="col-md-9">
                                            <input id="respostaC12" name="respostaC12" type="text" placeholder="Resposta Correta" class="form-control" 
                                            <?php 
                                                if (!empty($_SESSION['value_respostaC12'])) {
                                                    echo "value = ' " . $_SESSION['value_respostaC12'] . "'";
                                                    unset($_SESSION['value_respostaC12']);
                                                }
                                             ?>required>
                                             <?php 
                                                if (!empty($_SESSION['vazio_respostaC12'])) {
                                                    echo $_SESSION['vazio_respostaC12'];
                                                    unset($_SESSION['vazio_respostaC12']);
                                                }
                                             ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="respostaE12">Resposta Errada 1</label>
                                        <div class="col-md-9">
                                            <input id="respostaE12" name="respostaE12" type="text" placeholder="Resposta Errada" class="form-control" 
                                            <?php 
                                                if (!empty($_SESSION['value_respostaE12'])) {
                                                    echo "value = ' " . $_SESSION['value_respostaE12'] . "'";
                                                    unset($_SESSION['value_respostaE12']);
                                                }
                                             ?>required>
                                             <?php 
                                                if (!empty($_SESSION['vazio_respostaE12'])) {
                                                    echo $_SESSION['vazio_respostaE12'];
                                                    unset($_SESSION['vazio_respostaE12']);
                                                }
                                             ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="respostaE22">Resposta Errada 2</label>
                                        <div class="col-md-9">
                                            <input id="respostaE22" name="respostaE22" type="text" placeholder="Resposta Errada 2" class="form-control" 
                                            <?php 
                                                if (!empty($_SESSION['value_respostaE22'])) {
                                                    echo "value = ' " . $_SESSION['value_respostaE22'] . "'";
                                                    unset($_SESSION['value_respostaE22']);
                                                }
                                             ?>required>
                                             <?php 
                                                if (!empty($_SESSION['vazio_respostaE22'])) {
                                                    echo $_SESSION['vazio_respostaE22'];
                                                    unset($_SESSION['vazio_respostaE22']);
                                                }
                                             ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="respostaE32">Resposta Errada 3</label>
                                        <div class="col-md-9">
                                            <input id="respostaE32" name="respostaE32" type="text" placeholder="Resposta Errada 3" class="form-control" 
                                            <?php 
                                                if (!empty($_SESSION['value_respostaE32'])) {
                                                    echo "value = ' " . $_SESSION['value_respostaE32'] . "'";
                                                    unset($_SESSION['value_respostaE32']);
                                                }
                                             ?>required>
                                             <?php 
                                                if (!empty($_SESSION['vazio_respostaE32'])) {
                                                    echo $_SESSION['vazio_respostaE32'];
                                                    unset($_SESSION['vazio_respostaE32']);
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
                            <a href="?pagina=atividade3">
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