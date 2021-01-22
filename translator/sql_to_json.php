<?
function translateSqlArray($sqlresult){
    $result = array();
    while($row = $sqlresult){
        array_push($result, array('makeId'$row['makeId']))
    }

    $json = array('Status' => 'Success',
    'Count' => 'x'
    'Result');
}