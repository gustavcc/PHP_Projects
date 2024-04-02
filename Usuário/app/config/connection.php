<?php
define('servername','localhost');
define('username','root');
define('password','admin');
define('db','usuarios');

$conn;

function connection(){
    global $conn;
    $conn = new mysqli(servername, username, password, db);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "sucess";
}

function close(){
    global $conn;
    $conn->close();
}

$name = $_GET['username'];
$email = $_GET['email'];
$pass = $_GET['password'];

function insertDB(){
    global $conn;
    $sql = "INSERT INTO usuario (username, email, password) VALUES('Gustavo','gustavo@email.com','12345')";

    if ($conn->query($sql) === TRUE) {
        $conn->query($sql);
        echo 'Insert successfully';
    }
}

?>