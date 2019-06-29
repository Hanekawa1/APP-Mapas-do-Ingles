<?php

/*
    API desenvolvida por: Wender Lucas Souza - Aluno do 4o período de Sistemas de Informação - UNIPAM

    Consideracões (para usos futuros):
    Esta API pode conter erros ou códigos desnecessários. Uma observação detalhada é necessária antes de sua utilização (Primeira experiência com API's/Aplicações com Web Services). 
    As usabilidades de cada seção da API está comentada logo acima de cada requisição. 

    "Se eu tivesse xitadoauaustdhrhusdhaksxitadojgaioadisjaitaodo eu teria mirado pro outro lado? Ia ou não ia?" - aspx, 2009;

*/
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
header('Access-Control-Allow-Headers: "Origin, X-Requested-With, Content-Type, Accept"');
header("Access-Control-Allow-Origin: *", false);
header('Access-Control-Allow:  "GET, PUT, POST, DELETE, OPTIONS"');

$app = new \Slim\App;

//Seleciona todos do API

$app->get('/api/cadastros', function(Request $request, Response $response){
    $sql = "SELECT * FROM cadastros";
    try{
        $db = new db();

        $db = $db->connect();

        $stmt = $db->query($sql);
        $cadastros = $stmt->fetchAll(PDO::FETCH_OBJ);
        $db = null;
        echo json_encode($cadastros);
    } catch (PDOException $e){
        echo '{ "error": { "text": '.$e->getMessage(). '}}';
    }
});

//Seleciona apenas um (funcional)

$app->get('/api/cadastros/{email}/{senha}', function(Request $request, Response $response, array $args){
    $email = $args['email'];
    $senha = $args['senha'];
    //$email = $request->getAttribute('email');
    //$senha = $request->getAtrribute('senha');
    $sql = "SELECT * FROM cadastros WHERE email = '$email' AND senha = '$senha'";
   
    try{
        $db = new db();

        $db = $db->connect();

        $stmt = $db->query($sql);
        $cadastro = $stmt->fetchAll(PDO::FETCH_OBJ);
       
        $db = null;

        if($cadastro == null || $cadastro == ''){
            echo 'erro 404';
            return;
        } else {
            echo json_encode($cadastro);
        }
        /*
        if($email === $cadastro && $senha === $cadastro){
            echo json_encode($cadastro);
        }
        if($email != $cadastro || $senha != $cadastro){
           return;
        } 
        */
       
        
    } catch (PDOException $e){
        echo '{ "error": { "text": '.$e->getMessage(). '}}';
    }


});

//Salvar um usuário (desnecessário na aplicação mas pode ser algo a ser usado futuramente)
$app->post('/api/cadastros/add', function(Request $request, Response $response){
    $email = $request->getParam('email');
    $senha = $request->getParam('senha');
    $cpf = $request->getParam('cpf');
    $moduloinicial = $request->getParam('moduloInicial');
    $expiracaoConta = $request->getParam('expiracaoConta');

    $sql = "INSERT INTO cadastros (email, senha, cpf, moduloinicial, expiracaoconta)
            VALUES (:email, :senha, :cpf, :moduloinicial, :expiracaoconta)";
    try{
        $db = new db();

        $db = $db->connect();

        $stmt = $db->prepare($sql);

        $stmt->bindParam(':email',              $email);
        $stmt->bindParam(':senha',              $senha);
        $stmt->bindParam(':cpf',                $cpf);
        $stmt->bindParam(':moduloInicial',      $moduloinicial);
        $stmt->bindParam(':expiracaoConta',     $expiracaoConta);

        $stmt->execute();

        echo '{ "notice": { "text": "Usuário Adicionado }" ';
    } catch (PDOException $e){
        echo '{ "error": { "text": '.$e->getMessage(). '}}';
    }
});

//Atualizar o usuário (vai ser importante pra atualizar o modulo do usuário ou atualizar a senha talvez)
//Teve problema de integridade, verificar banco, DER ou comando update
$app->put('/api/cadastros/update/{idUsuario}', function(Request $request, Response $response){
    $idUsuario= $request->getAttribute('idUsuario');

    $email = $request->getParam('email');
    $senha = $request->getParam('senha');
    $cpf = $request->getParam('cpf');
    $moduloinicial = $request->getParam('moduloInicial');
    $expiracaoConta = $request->getParam('expiracaoConta');
    $statusDia = $request->getParam('statusDia');

    $sql = "UPDATE cadastros SET
                email = :email,
                senha = :senha,
                cpf = :cpf,
                moduloInicial = :moduloInicial,
                expiracaoConta = :expiracaoConta,
                statusDia = :statusDia
            WHERE idUsuario = '$idUsuario'";
    try{
        $db = new db();

        $db = $db->connect();

        $stmt = $db->prepare($sql);

        $stmt->bindParam(':email',              $email);
        $stmt->bindParam(':senha',              $senha);
        $stmt->bindParam(':cpf',                $cpf);
        $stmt->bindParam(':moduloInicial',      $moduloinicial);
        $stmt->bindParam(':expiracaoConta',     $expiracaoConta);
        $stmt->bindParam(':statusDia',          $statusDia);

        $stmt->execute();

        echo '{ "notice": { "text": "Usuário Atualizado }" ';
    } catch (PDOException $e){
        echo '{ "error": { "text": '.$e->getMessage(). '}}';
    }
});

//Deletar (acho que nao vai ser preciso mas nao custa nada)
$app->get('/api/cadastros/delete/{email}', function(Request $request, Response $response){
    $email = $request->getAttribute('email');


    $sql = "SELECT FROM cadastros WHERE email = '$email'";
    try{
        $db = new db();

        $db = $db->connect();

        $stmt = $db->prepare($sql);
        $stmt->execute();
        $db = null;
        echo '{ "notice": { "text": "Usuário Deletado }" ';
    } catch (PDOException $e){
        echo '{ "error": { "text": '.$e->getMessage(). '}}';
    }


});

//Comecei as atividades, mas ta tudo em um arquivo só, selecionando tudo do bd
//Atividade01
$app->get('/api/atividade01', function(Request $request, Response $response){    
    $sql = "SELECT * FROM atividade01";
    try{
        $db = new db();

        $db = $db->connect();

        $stmt = $db->query($sql);
        $atividade01 = $stmt->fetchAll(PDO::FETCH_OBJ);
        $db = null;
        echo json_encode($atividade01);
    } catch (PDOException $e){
        echo '{ "error": { "text": '.$e->getMessage(). '}}';
    }
});

//Atividade02
$app->get('/api/atividade02', function(Request $request, Response $response){    
    $sql = "SELECT * FROM atividade02";
    try{
        $db = new db();

        $db = $db->connect();

        $stmt = $db->query($sql);
        $atividade02 = $stmt->fetchAll(PDO::FETCH_OBJ);
        $db = null;
        echo json_encode($atividade02);
    } catch (PDOException $e){
        echo '{ "error": { "text": '.$e->getMessage(). '}}';
    }
});

//Atividade03
$app->get('/api/atividade03', function(Request $request, Response $response){    
    $sql = "SELECT * FROM atividade03";
    try{
        $db = new db();

        $db = $db->connect();

        $stmt = $db->query($sql);
        $atividade03 = $stmt->fetchAll(PDO::FETCH_OBJ);
        $db = null;
        echo json_encode($atividade03);
    } catch (PDOException $e){
        echo '{ "error": { "text": '.$e->getMessage(). '}}';
    }
});

//Atividade04
$app->get('/api/atividade04', function(Request $request, Response $response){    
    $sql = "SELECT * FROM atividade04";
    try{
        $db = new db();

        $db = $db->connect();

        $stmt = $db->query($sql);
        $atividade04 = $stmt->fetchAll(PDO::FETCH_OBJ);
        $db = null;
        echo json_encode($atividade04);
    } catch (PDOException $e){
        echo '{ "error": { "text": '.$e->getMessage(). '}}';
    }
});

//Atividade05
$app->get('/api/atividade05', function(Request $request, Response $response){    
    $sql = "SELECT * FROM atividade05";
    try{
        $db = new db();

        $db = $db->connect();

        $stmt = $db->query($sql);
        $atividade05 = $stmt->fetchAll(PDO::FETCH_OBJ);
        $db = null;
        echo json_encode($atividade05);
    } catch (PDOException $e){
        echo '{ "error": { "text": '.$e->getMessage(). '}}';
    }
});


//Selecionar apenas uma atividade (seguindo lógica de login)
//Atividade 01

$app->get('/api/atividade01/{modulo}/{dia}', function(Request $request, Response $response, array $args){
    $idModulo = $args['modulo'];
    $idDia = $args['dia'];

    $sql = "SELECT * FROM atividade01 WHERE idmodulo = '$idModulo' AND iddia = '$idDia'";
   
    try{
        $db = new db();

        $db = $db->connect();

        $stmt = $db->query($sql);
        $atividade01 = $stmt->fetchAll(PDO::FETCH_OBJ);
       
        $db = null;

        if($atividade01 == null || $atividade01 == ''){
            echo 'erro 404';
            return;
        } else {
            echo json_encode($atividade01);
        }
        
    } catch (PDOException $e){
        echo '{ "error": { "text": '.$e->getMessage(). '}}';
    }
});

//Atividade 02

$app->get('/api/atividade02/{modulo}/{dia}', function(Request $request, Response $response, array $args){
    $idModulo = $args['modulo'];
    $idDia = $args['dia'];

    $sql = "SELECT * FROM atividade02 WHERE idmodulo = '$idModulo' AND iddia = '$idDia'";
   
    try{
        $db = new db();

        $db = $db->connect();

        $stmt = $db->query($sql);
        $atividade02 = $stmt->fetchAll(PDO::FETCH_OBJ);
       
        $db = null;

        if($atividade02 == null || $atividade02 == ''){
            echo 'erro 404';
            return;
        } else {
            echo json_encode($atividade02);
        }
        
    } catch (PDOException $e){
        echo '{ "error": { "text": '.$e->getMessage(). '}}';
    }
});

//Atividade 03


$app->get('/api/atividade03/{modulo}/{dia}', function(Request $request, Response $response, array $args){
    $idModulo = $args['modulo'];
    $idDia = $args['dia'];

    $sql = "SELECT * FROM atividade03 WHERE idmodulo = '$idModulo' AND iddia = '$idDia'";
   
    try{
        $db = new db();

        $db = $db->connect();

        $stmt = $db->query($sql);
        $atividade03 = $stmt->fetchAll(PDO::FETCH_OBJ);
       
        $db = null;

        if($atividade03 == null || $atividade03 == ''){
            echo 'erro 404';
            return;
        } else {
            echo json_encode($atividade03);
        }
        
    } catch (PDOException $e){
        echo '{ "error": { "text": '.$e->getMessage(). '}}';
    }
});

//Atividade 04


$app->get('/api/atividade04/{modulo}/{dia}', function(Request $request, Response $response, array $args){
    $idModulo = $args['modulo'];
    $idDia = $args['dia'];

    $sql = "SELECT * FROM atividade04 WHERE idmodulo = '$idModulo' AND iddia = '$idDia'";
   
    try{
        $db = new db();

        $db = $db->connect();

        $stmt = $db->query($sql);
        $atividade04 = $stmt->fetchAll(PDO::FETCH_OBJ);
       
        $db = null;

        if($atividade04 == null || $atividade04 == ''){
            echo 'erro 404';
            return;
        } else {
            echo json_encode($atividade04);
        }
        
    } catch (PDOException $e){
        echo '{ "error": { "text": '.$e->getMessage(). '}}';
    }
});

//Atividade 05


$app->get('/api/atividade05/{modulo}/{dia}', function(Request $request, Response $response, array $args){
    $idModulo = $args['modulo'];
    $idDia = $args['dia'];

    $sql = "SELECT * FROM atividade05 WHERE idmodulo = '$idModulo' AND iddia = '$idDia'";
   
    try{
        $db = new db();

        $db = $db->connect();

        $stmt = $db->query($sql);
        $atividade05 = $stmt->fetchAll(PDO::FETCH_OBJ);
       
        $db = null;

        if($atividade05 == null || $atividade05 == ''){
            echo 'erro 404';
            return;
        } else {
            echo json_encode($atividade05);
        }
        
    } catch (PDOException $e){
        echo '{ "error": { "text": '.$e->getMessage(). '}}';
    }
});

//Requisição de atualização com GET
//Essa funcionou no postman

$app->get('/api/cadastros/update/{modulo}/{dia}/{idUsuario}/{email}/{senha}/{cpf}/{expiracaoConta}', 
function(Request $request, Response $response, array $args){

    $moduloInicial = $args['modulo'];
    $statusDia = $args['dia'];
    $idUsuario = $args['idUsuario'];
    $email = $args['email'];
    $senha = $args['senha'];
    $cpf = $args['cpf'];
    $expiracaoConta = $args['expiracaoConta'];
    


    $sql = "UPDATE cadastros SET
    email = '$email',
    senha = '$senha',
    cpf = '$cpf',
    moduloInicial = '$moduloInicial',
    expiracaoConta = '$expiracaoConta',
    statusDia = '$statusDia'
    WHERE idUsuario = '$idUsuario'";
   
    try{
        $db = new db();

        $db = $db->connect();

        $stmt = $db->prepare($sql);
        $stmt->execute();
       
        $db = null;
        
        echo '{ "notice": { "text": "Usuário Atualizado }" ';
    } catch (PDOException $e){
        echo '{ "error": { "text": '.$e->getMessage(). '}}';
    }

});