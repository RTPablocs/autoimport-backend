<?php
require 'db_connector.php';

function getAllMakes(){
    $result = array();
    $conn = connect();
    $query = $conn->query('select * from makes;');
    while ($row = $query->fetch_assoc()){
        array_push($result, [$row['makeId'],$row['makeName']]);
    }
    $conn->close();
    return json_encode($result);
}

function getMakeId($id){
    $conn = connect();
    $query = $conn->query('select makeName from makes where makeId = ' . $id);
    $result = $query->fetch_assoc();
    $conn->close();
    return json_encode($result);
}