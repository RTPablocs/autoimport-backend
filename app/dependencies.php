<?php
declare(strict_types=1);

use DI\ContainerBuilder;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Monolog\Processor\UidProcessor;
use Psr\Container\ContainerInterface;
use Psr\Log\LoggerInterface;

return function (ContainerBuilder $containerBuilder) {
    $containerBuilder->addDefinitions([LoggerInterface::class => function (ContainerInterface $c) {
        $settings = $c->get('settings');

        $loggerSettings = $settings['logger'];
        $logger = new Logger($loggerSettings['name']);

        $processor = new UidProcessor();
        $logger->pushProcessor($processor);

        $handler = new StreamHandler($loggerSettings['path'], $loggerSettings['level']);
        $logger->pushHandler($handler);

        return $logger;
    }, PDO::class => function (ContainerInterface $c) {
        $settings = $c->get('settings');
        $dbSettings = $settings['database'];

        $user = $dbSettings['user'];
        $password = $dbSettings['password'];
        $host = $dbSettings['host'];
        $db = $dbSettings['database'];
        $charset = $dbSettings['charset'];
        $flags = $dbSettings['flags'];
        $url = "mysql:host=$host;dbname=$db;charset=$charset";

        return new PDO ($url, $user, $password, $flags);
    }]);
};
