<?php
//https://www.bing.com/videos/search?q=api+php+com+slim&docid=603530286230999200&mid=79731093B70D072F1B0779731093B70D072F1B07&view=detail&FORM=VIRE
require __DIR__ . '/vendor/autoload.php';

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\RequestInterface as Request;
use Slim\Factory\AppFactory;

$app = AppFactory::create();

$app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("asda adsd as");
    return $response;
});

$app->get('/usuarios', function (Request $request, Response $response, $args) {
    $usuarios = [
        '1' => 'asd',
        '2' => 'asd1',
        '3' => 'asd2',
        '4' => 'asd3',
        '5' => 'asd4',
        '6' => 'asd5',
    ];

    $response->getBody()->write(json_encode($usuarios));
    return $response->withHeader('Content-type', 'application/json');
});

$app->get('/usuarios/{id}', function (Request $request, Response $response, $args) {
    $usuarios = [
        '1' => 'asd',
        '2' => 'asd1',
        '3' => 'asd2',
        '4' => 'asd3',
        '5' => 'asd4',
        '6' => 'asd5',
    ];
    $usuario[$args['id']] = $usuarios[$args['id']];
    $response->getBody()->write(json_encode($usuario));
    return $response->withHeader('Content-type', 'application/json');
});

$app->run();
