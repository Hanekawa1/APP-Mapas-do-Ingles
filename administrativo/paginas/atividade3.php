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
                            <form class="form-horizontal" action="gravarAtividade03.php" method="post" novalidate>
                                <fieldset>
                                    <legend class="text-center">Atividade 3</legend>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="imagem3">Imagem</label>
                                        <div class="col-md-9">
                                            <input id="imagem3"  name="imagem3" type="text" class="form-control" placeholder="Imagem da Atividade 3 (URL)"
                                            <?php 
                                                if (!empty($_SESSION['value_imagem3'])) {
                                                    echo "value = ' " . $_SESSION['value_imagem3'] . "'";
                                                    unset($_SESSION['value_imagem3']);
                                                }
                                             ?>
                                             required>
                                             <?php 
                                                if (!empty($_SESSION['vazio_imagem3'])) {
                                                    echo $_SESSION['vazio_imagem3'];
                                                    unset($_SESSION['vazio_imagem3']);
                                                }
                                             ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="respostaC23">Resposta Correta</label>
                                        <div class="col-md-9">
                                            <input id="respostaC23" name="respostaC23" type="text" placeholder="Resposta Correta" class="form-control" 
                                            <?php 
                                                if (!empty($_SESSION['value_respostaC23'])) {
                                                    echo "value = ' " . $_SESSION['value_respostaC23'] . "'";
                                                    unset($_SESSION['value_respostaC23']);
                                                }
                                             ?>required>
                                             <?php 
                                                if (!empty($_SESSION['vazio_respostaC23'])) {
                                                    echo $_SESSION['vazio_respostaC23'];
                                                    unset($_SESSION['vazio_respostaC23']);
                                                }
                                             ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="respostaE13">Resposta Errada 1</label>
                                        <div class="col-md-9">
                                            <input id="respostaE13" name="respostaE13" type="text" placeholder="Resposta Errada 1" class="form-control" 
                                            <?php 
                                                if (!empty($_SESSION['value_respostaE13'])) {
                                                    echo "value = ' " . $_SESSION['value_respostaE13'] . "'";
                                                    unset($_SESSION['value_respostaE13']);
                                                }
                                             ?>required>
                                             <?php 
                                                if (!empty($_SESSION['vazio_respostaE13'])) {
                                                    echo $_SESSION['vazio_respostaE13'];
                                                    unset($_SESSION['vazio_respostaE13']);
                                                }
                                             ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="respostaE23">Resposta Errada 2</label>
                                        <div class="col-md-9">
                                            <input id="respostaE23" name="respostaE23" type="text" placeholder="Resposta Errada 2" class="form-control"
                                            <?php 
                                                if (!empty($_SESSION['value_respostaE23'])) {
                                                    echo "value = ' " . $_SESSION['value_respostaE23'] . "'";
                                                    unset($_SESSION['value_respostaE23']);
                                                }
                                             ?> required>
                                             <?php 
                                                if (!empty($_SESSION['vazio_respostaE23'])) {
                                                    echo $_SESSION['vazio_respostaE23'];
                                                    unset($_SESSION['vazio_respostaE23']);
                                                }
                                             ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="respostaE33">Resposta Errada 3</label>
                                        <div class="col-md-9">
                                            <input id="respostaE33" name="respostaE33" type="text" placeholder="Resposta Errada 3" class="form-control" 
                                            <?php 
                                                if (!empty($_SESSION['value_respostaE33'])) {
                                                    echo "value = ' " . $_SESSION['value_respostaE33'] . "'";
                                                    unset($_SESSION['value_respostaE33']);
                                                }
                                             ?>required>
                                             <?php 
                                                if (!empty($_SESSION['vazio_respostaE33'])) {
                                                    echo $_SESSION['vazio_respostaE33'];
                                                    unset($_SESSION['vazio_respostaE33']);
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
                            <a href="?pagina=atividade4">
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