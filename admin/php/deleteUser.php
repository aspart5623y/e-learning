<?php
     
    include '../includes/config.php';

    global $conn;


    if (isset($_GET['id'])){
        $id = $_GET['id'];

        $query = mysqli_query($conn, "DELETE FROM users_table WHERE portal_id = '$id'");

        if($query) {
            session_start();
            $_SESSION['success'] = "<div class='alert alert-danger'>User Deleted</div>";
            header('Location: '.SITEURL.'admin/users.php');
        }
        
    }


?>