<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';
require 'database/db_car_controller.php';

$app = AppFactory::create();

$app->get('/api/getAllMakes', function (Request $request, Response $response, $args){
    $action = getAllMakes();
    $response->withHeader('Content-type', 'application/json');
    $response->getBody()->write($action);
    return $response;
});

$app->get('/api/make/{makeId}', function (Request $request, Response $response, $args){
    $makeId = $args['makeId'];
    $action = getMakeId($makeId);
    $response->getBody()->write($action);
    return $response;
});

$app->run();