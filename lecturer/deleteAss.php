<?php
     
    include '../includes/config.php';

    global $conn;


    if (isset($_GET['id'])){

        $id = $_GET['id'];

        $query = mysqli_query($conn, "DELETE FROM assignment WHERE ass_id = '$id'");

        if ($query) {
            session_start();
            $_SESSION['success'] = "<div class='alert alert-danger'>Lecture Deleted</div>";
            header('Location: '.SITEURL.'lecturer/classroom-assignment.php');
        }
        
    } else if (isset($_GET['id']) AND isset($_GET['doc'])){

        $id = $_GET['id'];
        $doc = $_GET['doc'];


        $path = "../assignment/".$doc;
        $remove = unlink($path);

        if ($remove) {
            $query = mysqli_query($conn, "DELETE FROM assignment WHERE ass_id = '$id'");

            if ($query) {
                session_start();
                $_SESSION['success'] = "<div class='alert alert-danger'>Lecture Deleted</div>";
                header('Location: '.SITEURL.'lecturer/classroom-assignment.php');
            }
        }
 
    } else {
        header('Location: '.SITEURL.'lecturer/classroom-assignment.php');
    }


?>