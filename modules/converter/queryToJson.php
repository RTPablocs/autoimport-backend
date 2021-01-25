<?php

function queryToJson($fetched, $count){
    
    $makeArray = array();

    while($row = $fetched->fetch_assoc()){
        array_push($makeArray, $row);
    }

    $result = array(
        'Status' => 'Success',
        'Count' => $count,
        'Result' => $makeArray,
    );
    
    return json_encode($result);
}
