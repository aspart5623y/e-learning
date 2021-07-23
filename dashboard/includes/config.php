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







    

    $db2_host = 'localhost';
    $db2_username = 'root';
    $db2_password = '';
    $db2_name = 'exam_db';

    $conn2 = mysqli_connect($db2_host, $db2_username, $db2_password, $db2_name);

    if (!$conn2) {
        echo "error in database connection!"; 
        die(); 
    } 



?>