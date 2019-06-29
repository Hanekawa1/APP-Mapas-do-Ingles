<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

header('Access-Control-Allow-Headers: "Origin, X-Requested-With, Content-Type, Accept"');
header("Access-Control-Allow-Origin: *", false);

require '../vendor/autoload.php';
require '../src/config/db.php';

$app = new \Slim\App;
$app->get('/hello/{name}', function (Request $request, Response $response, array $args) {
    $name = $args['name'];
    $response->getBody()->write("Hello, $name");

    return $response;
});

//Rotas de API's
require '../src/routes/cadastros.php';
#require '../src/routes/atividade01.php';
#require '../src/routes/atividade02.php';
#require '../src/routes/atividade03.php';
#require '../src/routes/atividade04.php';
#require '../src/routes/atividade05.php';


$app->run();