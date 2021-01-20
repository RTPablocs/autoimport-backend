<?php
require __DIR__ . '/../config/config.php';


function connect(){
    $mysql = new mysqli(HOST, USER, PASSWORD, DB);

    if ($mysql->connect_errno) {
        die('Connection error:' . $mysql->connect_error);
    }
    return $mysql;
}
