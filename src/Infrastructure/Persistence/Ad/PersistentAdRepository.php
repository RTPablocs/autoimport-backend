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
        return array();
    }

    public function findAdOfModel($modelName, $price): array {
        // TODO: Implement findAdOfModel() method.
        return array();
    }

    public function deleteOne($adId): void {
        $sql = "delete from ads where id = $adId;";
        $this->connection->prepare($sql)->execute();
    }

    public function createOne($data): void {
        

        $id = (int) $data['id'];
        $title = $data['title'];
        $desc = $data['desc'];
        $make = $data['makeName'];
        $model = $data['modelName'];
        $price = $data['price'];
        $coords = (string) $data['coords'];

        $sql = "insert into ads values ($id, '$title', '$desc', '$make', '$model', $price, '$coords');";
        $this->connection->prepare($sql)->execute();
    }
}