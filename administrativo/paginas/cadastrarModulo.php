<div class="page-header">
                <h3>Cadastrar Módulo</h3>
            </div>
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="well well-sm">
            <form class="form-horizontal" action="gravaModulo.php" method="post" novalidate>
                <fieldset>
                    <legend class="text-center">Módulo</legend>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="nModulo">Número do Módulo:</label>
                        <div class="col-md-9">
                            <input id="nModulo"  name="nModulo" type="number" placeholder="Número do Módulo" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="nomeModulo">Nome do Módulo: </label>
                        <div class="col-md-9">
                            <input id="nomeModulo"  name="nomeModulo" type="text" placeholder="Nome do Módulo" class="form-control" required>
                        </div>
                    </div>                
                </fieldset>
                <div class="text-right">
                    <button class="btn btn-primary btn-lg" type="submit">Cadastrar</button>
                </div>
            </form>
        </div>        
    </div>
</div>
    <?php
                $sucesso = isset($_GET['sucesso']);
                if($sucesso){
            ?>
                                    

            <div class="alert alert-success" role="alert">
                <strong>Sucesso!</strong>
                    Módulo gravado com sucesso.
                </div>

            <?php
                }

            $erro = isset($_GET['erro']);
            if($erro){
            ?>

            <div class="alert alert-danger" role="alert">
                <strong>Erro!</strong>
                    Módulo já cadastrado. Verifique a página de módulos cadastrados.
            </div>
<?php
   }
?>
<?php
                

            $erro2 = isset($_GET['erros']);
            if($erro2){
            ?>

            <div class="alert alert-danger" role="alert">
                <strong>Erro!</strong>
                Erro no cadastro. Preencha novamente.  
            </div>
<?php
   }
?>