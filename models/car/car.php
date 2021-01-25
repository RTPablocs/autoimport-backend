<?php

require __DIR__ . '/../../database/db_connector.php';
require __DIR__ .'/../../modules/converter/queryToJson.php';

class Car{
    private $conn;

    public function __construct(){
        $this->conn = connect();
    }
    function getAllMakes(){
        $sql = 'select * from makes';
        $count = 'select count(makeId) from makes';
        $query = $this->conn->query($sql);
        $result = queryToJson($query, $count);
        return $result;
    }
}

$car = new Car;
$result = $car->getAllMakes();
print_r($result)
;