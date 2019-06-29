<?php 
session_start();
 ?>
<div class="page-header">
                <h3>Editar cadastro</h3>
            </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="well well-sm">
                            <form class="form-horizontal" action="editaUsuario.php" method="post" novalidate>
                                <fieldset>
                                    <legend class="text-center">Editar Usuário</legend>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="senha">Id</label>
                                        <div class="col-md-9">
                                    <input id="id" name="id" type="number" placeholder="Id do usuário" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="nomeUsuario">E-mail do Usuário</label>
                                        <div class="col-md-9">
                                            <input type="text" id="nomeUsuario" name="nomeUsuario"  placeholder="E-mail" class="form-control"
                                            <?php 
                                                if (!empty($_SESSION['value_nome'])) {
                                                    echo "value = ' " . $_SESSION['value_nome'] . "'";
                                                    unset($_SESSION['value_nome']);
                                                }
                                             ?>
                                             required>

                                            <?php 
                                                if (!empty($_SESSION['vazio_nome'])) {
                                                    echo $_SESSION['vazio_nome'];
                                                    unset($_SESSION['vazio_nome']);
                                                }
                                             ?>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="senha">Senha</label>
                                        <div class="col-md-9">
                                            <input id="senha" name="senha" type="password" placeholder="Senha" class="form-control"
                                            <?php 
                                                if (!empty($_SESSION['value_senha'])) {
                                                    echo "value = ' " . $_SESSION['value_senha'] . "'";
                                                    unset($_SESSION['value_senha']);
                                                }
                                             ?> required>
                                            <?php 
                                                if (!empty($_SESSION['vazio_senha'])) {
                                                    echo $_SESSION['vazio_senha'];
                                                    unset($_SESSION['vazio_senha']);
                                                }
                                             ?>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="cpf">CPF</label>
                                        <div class="col-md-9">
                                            <input id="cpf" name="cpf" type="number" class="form-control" placeholder="Apenas números" 
                                            <?php 
                                                if (!empty($_SESSION['value_cpf'])) {
                                                    echo "value = ' " . $_SESSION['value_cpf'] . "'";
                                                    unset($_SESSION['value_cpf']);
                                                }
                                             ?>
                                            required>
                                            <?php 
                                                if (!empty($_SESSION['vazio_cpf'])) {
                                                    echo $_SESSION['vazio_cpf'];
                                                    unset($_SESSION['vazio_cpf']);
                                                }
                                             ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="turma">Turma</label>
                                        <div class="col-md-9">
                                            <input id="turma" name="turma" type="number" class="form-control" placeholder="1"
                                            <?php 
                                                if (!empty($_SESSION['value_turma'])) {
                                                    echo "value = ' " . $_SESSION['value_turma'] . "'";
                                                    unset($_SESSION['value_turma']);
                                                }
                                             ?> required>
                                            <?php 
                                                if (!empty($_SESSION['vazio_turma'])) {
                                                    echo $_SESSION['vazio_turma'];
                                                    unset($_SESSION['vazio_turma']);
                                                }
                                             ?>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="expiracaoConta">Expiração da Conta</label>
                                        <div class="col-md-9">
                                            <input id="expiracaoConta" name="expiracaoConta" type="date" class="form-control" required>
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
                                        Usuário gravado com sucesso.
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