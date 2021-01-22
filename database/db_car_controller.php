<?php
require 'db_connector.php';

function getAllMakes(){
    $result = array();
    $conn = connect();
    $query = $conn->query('select * from makes;');
    while ($row = $query->fetch_assoc()){
        array_push($result, array('makeId' => $row['makeId'], 'makeName'=> $row['makeName']));
    }
    $count = $conn->query('select count(makeId) as count from makes')->fetch_assoc();
    $total = array('Status'=> 'Success',
                    'Count'=> $count['count'],
                    'Result' => $result);
    return json_encode($total);
}

function getMakeId($id){
    $conn = connect();
    $query = $conn->query('select makeName from makes where makeId = ' . $id);
    $result = $query->fetch_assoc();
    $conn->close();
    return json_encode($result);
}
