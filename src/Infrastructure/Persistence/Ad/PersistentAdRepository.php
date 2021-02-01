<?php


namespace App\Infrastructure\Persistence\Ad;

use App\Domain\Ad\AdRepository;
use PDO;

class PersistentAdRepository implements AdRepository {

    private $connection;

    public function __construct(PDO $connection) {
        $this->connection = $connection;
    }

    public function findAll(): array {
        $sql  = "select * from ads";
        $result = $this->connection->query($sql);
        return $result->fetchAll();
    }

    public function findAdOfMake($makeName, $price): array {
        // TODO: Implement findAdOfMake() method.
    }

    public function findAdOfModel($modelName, $price): array {
        // TODO: Implement findAdOfModel() method.
    }

}