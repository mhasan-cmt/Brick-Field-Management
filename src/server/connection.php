<?php

require_once ('constants.php');

$conn = new mysqli(SERVER, USERNAME, PASSWORD, DBNAME);

if($conn->connect_error){
    die("Connection Failed". $conn->connect_error);
    $conn->close();
}

