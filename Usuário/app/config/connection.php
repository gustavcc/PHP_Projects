<?php

define('servername','localhost');
define('username','root');
define('password','');
define('db','usuario');

$conn;

function connection(){

    global $conn;

    $conn = new mysqli(servername, username, password, db);

    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
}

function close(){

    global $conn;

    $conn->close();
}

connection();

?>