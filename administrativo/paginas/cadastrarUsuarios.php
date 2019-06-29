<?php 
session_start();
 ?>
<div class="page-header">
                <h3>Cadastrar</h3>
            </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="well well-sm">
                            <form class="form-horizontal" action="gravar.php" method="post" novalidate>
                                <fieldset>
                                    <legend class="text-center">Cadastrar Usuários</legend>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="email">E-mail do Usuário</label>
                                        <div class="col-md-9">
                                            <input type="email" id="email" name="email"  placeholder="E-mail" class="form-control"
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
                                        <label class="col-md-3 control-label" for="moduloInicial">Módulo Inicial</label>
                                        <div class="col-md-9">
                                            <input id="moduloInicial" name="moduloInicial" type="number" class="form-control" placeholder="1"
                                            <?php 
                                                if (!empty($_SESSION['value_moduloInicial'])) {
                                                    echo "value = ' " . $_SESSION['value_moduloInicial'] . "'";
                                                    unset($_SESSION['value_moduloInicial']);
                                                }
                                             ?> required>
                                            <?php 
                                                if (!empty($_SESSION['vazio_moduloInicial'])) {
                                                    echo $_SESSION['vazio_moduloInicial'];
                                                    unset($_SESSION['vazio_moduloInicial']);
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