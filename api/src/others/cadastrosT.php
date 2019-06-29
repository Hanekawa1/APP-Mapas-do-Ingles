<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
header('Access-Control-Allow-Headers: "Origin, X-Requested-With, Content-Type, Accept"');
header("Access-Control-Allow-Origin: *", false);
header('Access-Control-Allow:  "GET, PUT, POST, DELETE, OPTIONS"');

$app = new \Slim\App;

/*
$app->post('/api/cadastros/{email}', function(Request $request, Response $response){
    $email = $request->getAttribute('email');
    $senha = $request->getAttribute('senha');
    $sql = 'SELECT * FROM cadastros where email = '$email'';

    try{
        $db = new db();
        $db = $db->connect();
        $stmt = $db->query($sql);
        $cadastros = $stmt->fetchAll(PDO::FETCH_OBJ);
        $db = null;
        if($email == $cadastros || $senha == $cadastros){
            echo json_encode($cadastros);
        }
    }catch (PDOException $e){
        echo '{ "error": { "text": '.$e->getMessage(). '}}';
    }
});
*/

$app->post('/api/cadastros/', function(Request $request, Response $response){
    $email = $request->getParam('email');
    $senha = $request->getParam('senha');
    $sql = "SELECT * FROM cadastros where email = '$email' AND senha = '$senha'";

    try{
        $db = new db();
        $db = $db->connect();
        $stmt = $db->query($sql);
        $cadastros = $stmt->fetchAll(PDO::FETCH_OBJ);
        $db = null;
        if($email == $cadastros['email'] || $senha == $cadastros['senha']){
            echo json_encode($cadastros);
        } else {
            return;
        }
    }catch (PDOException $e){
        echo '{ "error": { "text": '.$e->getMessage(). '}}';
    }
});