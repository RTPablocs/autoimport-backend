<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Routing\RouteCollectorProxy;

require __DIR__ . '/../models/car/car.php';

$app->group('/api', function(RouteCollectorProxy $group){
    $group->get('/getAllMakes', function(Request $request, Response $response){
        $car = new Car;
        $result = $car->getAllMakes();
        $response->withHeader('Content-Type', 'application/json');
        $response->getBody()->write($result);
    });
});