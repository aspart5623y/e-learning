<?php

    define('SITEURL', 'http://localhost/e-learning/');

    $db_host = 'localhost';
    $db_username = 'root';
    $db_password = '';
    $db_name = 'learningdb';

    $conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);

    if (!$conn) {
        echo "error in database connection!"; 
        die(); 
    } 


?>