<?php
     
    include './includes/config.php';

    global $conn2;


    if (isset($_GET['id']) AND isset($_GET['table'])){
        $id = $_GET['id'];
        $table = $_GET['table'];
        

        // $query = mysqli_query($conn2, "SELECT * FROM `$table`");
        $query = mysqli_query($conn2, "DELETE FROM `$table` WHERE ques_id = '$id'");

        if ($query) {
            session_start();
            $_SESSION['success'] = "<div class='alert alert-danger'>Question Deleted</div>";
            // header('Location: '.SITEURL.'lecturer/classroom-lectures.php');
            echo "question deleted";
        }
        
        
    }


?>