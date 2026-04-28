<?php

    $host = 'localhost:3306';
    $user = 'root';
    $pass = '';
    $db = 'aula';

    $conn = mysqli_connect($host, $user, $pass, $db);
    if(!$conn){
        die('Erro '. mysqli_connect_error());
    }
    mysqli_set_charset($conn, 'utf8');

?>