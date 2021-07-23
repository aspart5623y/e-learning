<?php
      
    include '../includes/config.php';

    global $conn;


    if (isset($_GET['id']) AND isset($_GET['doc'])){
        $id = $_GET['id'];
        $doc = $_GET['doc'];


        $path = "../materials/".$doc;
        $remove = unlink($path);

        if ($remove) {
            $query = mysqli_query($conn, "DELETE FROM lectures WHERE lecture_id = '$id'");

            if ($query) {
                session_start();
                $_SESSION['success'] = "<div class='alert alert-danger'>Lecture Deleted</div>";
                header('Location: '.SITEURL.'lecturer/classroom-lectures.php');
            }
        }


        
        
    }


?>