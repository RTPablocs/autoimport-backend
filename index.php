<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';
require 'database/db_controller.php';

$app = AppFactory::create();

$app->get('/api/getAllMakes()', function (Request $request, Response $response, $args){
    $action = getAllMakes();
    $response->getBody()->write($action);
    return $response;
});

$app->run();