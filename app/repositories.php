<?php
declare(strict_types=1);

use App\Domain\User\UserRepository;
use App\Domain\Ad\AdRepository;
use App\Infrastructure\Persistence\Ad\PersistentAdRepository;
use App\Infrastructure\Persistence\User\InMemoryUserRepository;
use DI\ContainerBuilder;

return function (ContainerBuilder $containerBuilder) {
    // Here we map our UserRepository interface to its in memory implementation
    $containerBuilder->addDefinitions([
        UserRepository::class => \DI\autowire(InMemoryUserRepository::class),
        AdRepository::class => \DI\autowire(PersistentAdRepository::class)

    ]);
};
