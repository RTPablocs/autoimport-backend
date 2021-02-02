<?php
declare(strict_types=1);

use App\Application\Actions\User\ListUsersAction;
use App\Application\Actions\User\ViewUserAction;
use App\Application\Actions\Ad\ListAdsAction;
use App\Application\Actions\Ad\DeleteAdAction;
use App\Application\Actions\Ad\CreateAdAction;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {
    $app->options('/{routes:.*}', function (Request $request, Response $response) {
        // CORS Pre-Flight OPTIONS Request Handler
        return $response;
    });

    $app->get('/', function (Request $request, Response $response) {
        $response->getBody()->write('Hello world!');
        return $response;
    });

    $app->group('/users', function (Group $group) {
        $group->get('', ListUsersAction::class);
        $group->get('/{id}', ViewUserAction::class);
        //$group->post('/create');
        //$group->delete('/delete/{id}', DeleteAdAction::class);
    });

    $app->group('/ads', function (Group $group){
       $group->get('', ListAdsAction::class);
       //$group->get('/{id}');
       $group->delete('/delete/{id}', DeleteAdAction::class);
       $group->post('/new', CreateAdAction::class);
       //$group->patch('/update/{id}');
    });
};
