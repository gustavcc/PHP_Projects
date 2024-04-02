<?php
    $path = __DIR__ ."\Usuário\\app\\config\\";
    $file = $path . 'connection.php';

    if (file_exists($file)) {
        connection();
        insertDB();
        close();
    }
?>