<?php

namespace  App\Infrastructure\Persistence\Category;

use App\Domain\Category\CategoryRepository;
use PDO;

class PersistentCategoryRepository implements CategoryRepository{
    
    private $connection;

    public function __construct(PDO $connection){
        $this->connection = $connection;
    }

    public function findAll(): array {
        $sql = "select * from categories";
        $result = $this->connection->query($sql);
        return $result->fetchAll();
    }

}