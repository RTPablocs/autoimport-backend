<?php
require 'db_connector.php';

function getAllMakes(){
    $result = array();
    $conn = connect();
    $query = $conn->query('select * from makes;');
    while ($row = $query->fetch_assoc()){
        array_push($result, [$row['makeId'],$row['makeName']]);
    }
    return json_encode($result);
}