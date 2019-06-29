<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
header('Access-Control-Allow-Headers: "Origin, X-Requested-With, Content-Type, Accept"');
header("Access-Control-Allow-Origin: *", false);
header('Access-Control-Allow-Methods:  "GET, PUT, POST, DELETE, OPTIONS"');

$app = new \Slim\App;

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