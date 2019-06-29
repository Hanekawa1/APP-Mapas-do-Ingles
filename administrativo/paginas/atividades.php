<div class="page-header">
                <h3>Modulo <?php echo $dado['nModulo']; ?> , Dia <?php echo $dado['dModulo']; ?></h3>
            </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="well well-sm">
                            <form class="form-horizontal" action="gravar.php" method="post" novalidate>
                                <fieldset>
                                    <legend class="text-center">Atividade 1</legend>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="texto1">Texto</label>
                                        <div class="col-md-9">
                                            <input id="texto1" style="height:375px" name="texto1" type="text" placeholder="Texto da Atividade 1" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="imagem1">Imagem</label>
                                        <div class="col-md-9">
                                            <input id="imagem1" name="imagem1" type="file" placeholder="Imagem da Atividade 1" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-12 text-right">
                                            <button type="submit" class="btn btn-primary btn-lg">Salvar</button>
                                        </div>
                                    </div>
                                    <?php
                                        $sucesso = isset($_GET['sucesso']);
                                        if($sucesso){
                                    ?>
                                    

                                    <div class="alert alert-success" role="alert">
                                        <strong>Sucesso!</strong>
                                        Orçamento gravado com sucesso.
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
                                    
                                </fieldset>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="well well-sm">
                            <form class="form-horizontal" action="gravar.php" method="post" novalidate>
                                <fieldset>
                                    <legend class="text-center">Atividade 2</legend>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="texto2">Texto</label>
                                        <div class="col-md-9">
                                            <input id="texto2" style="height:175px" name="texto2" type="text" placeholder="Texto da Atividade 2" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="respostaC12">Resposta Correta</label>
                                        <div class="col-md-9">
                                            <input id="respostaC12" name="respostaC12" type="text" placeholder="Resposta Correta" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="respostaE12">Resposta Errada 1</label>
                                        <div class="col-md-9">
                                            <input id="respostaE12" name="respotaE12" type="text" placeholder="Resposta Errada" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="respostaE22">Resposta Errada 2</label>
                                        <div class="col-md-9">
                                            <input id="respostaE22" name="respostaE22" type="text" placeholder="Resposta Errada 2" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="respostaE32">Resposta Errada 3</label>
                                        <div class="col-md-9">
                                            <input id="respostaE32" name="respostaE32" type="text" placeholder="Resposta Errada 3" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12 text-right">
                                            <button type="submit" class="btn btn-primary btn-lg">Salvar</button>
                                        </div>
                                    </div>
                                    <?php
                                        $sucesso = isset($_GET['sucesso']);
                                        if($sucesso){
                                    ?>
                                    

                                    <div class="alert alert-success" role="alert">
                                        <strong>Sucesso!</strong>
                                        Orçamento gravado com sucesso.
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
                                      
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="well well-sm">
                            <form class="form-horizontal" action="gravar.php" method="post" novalidate>
                                <fieldset>
                                    <legend class="text-center">Atividade 3</legend>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="imagem3">Imagem</label>
                                        <div class="col-md-9">
                                            <input id="imagem3"  name="imagem3" type="file" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="respostaC23">Resposta Correta</label>
                                        <div class="col-md-9">
                                            <input id="respostaC23" name="respostaC23" type="text" placeholder="Resposta Correta" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="respostaE13">Resposta Errada 1</label>
                                        <div class="col-md-9">
                                            <input id="respostaE13" name="respostaE13" type="text" placeholder="Resposta Errada 1" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="respostaE23">Resposta Errada 2</label>
                                        <div class="col-md-9">
                                            <input id="respostaE23" name="respostaE23" type="text" placeholder="Resposta Errada 2" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="respostaE33">Resposta Errada 3</label>
                                        <div class="col-md-9">
                                            <input id="respostaE33" name="respostaE33" type="text" placeholder="Resposta Errada 3" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12 text-right">
                                            <button type="submit" class="btn btn-primary btn-lg">Salvar</button>
                                        </div>
                                    </div>
                                    <?php
                                        $sucesso = isset($_GET['sucesso']);
                                        if($sucesso){
                                    ?>
                                    

                                    <div class="alert alert-success" role="alert">
                                        <strong>Sucesso!</strong>
                                        Orçamento gravado com sucesso.
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
                                      
                                </fieldset>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="well well-sm">
                            <form class="form-horizontal" action="gravar.php" method="post" novalidate>
                                <fieldset>
                                    <legend class="text-center">Atividade 4</legend>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="audio4">Áudio</label>
                                        <div class="col-md-9">
                                            <input id="audio4"  name="audio4" type="file" placeholder="Audio da Atividade 4" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="fraseaudio4">Frase do Áudio</label>
                                        <div class="col-md-9">
                                            <input id="fraseaudio4" style="height:233px" name="fraseaudio4" type="text" placeholder="Frase que o Audio Apresenta" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-12 text-right">
                                            <button type="submit" class="btn btn-primary btn-lg">Salvar</button>
                                        </div>
                                    </div>
                                    <?php
                                        $sucesso = isset($_GET['sucesso']);
                                        if($sucesso){
                                    ?>
                                    

                                    <div class="alert alert-success" role="alert">
                                        <strong>Sucesso!</strong>
                                        Orçamento gravado com sucesso.
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
                                      
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="well well-sm">
                            <form class="form-horizontal" action="gravar.php" method="post" novalidate>
                                <fieldset>
                                    <legend class="text-center">Atividade 5</legend>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="texto5">Texto</label>
                                        <div class="col-md-9">
                                            <input id="texto5" style="height:250px" name="texto5" type="text" placeholder="Texto da Atividade 5" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12 text-right">
                                            <button type="submit" class="btn btn-primary btn-lg">Salvar</button>
                                        </div>
                                    </div>
                                    <?php
                                        $sucesso = isset($_GET['sucesso']);
                                        if($sucesso){
                                    ?>
                                    

                                    <div class="alert alert-success" role="alert">
                                        <strong>Sucesso!</strong>
                                        Orçamento gravado com sucesso.
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
                                    
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>