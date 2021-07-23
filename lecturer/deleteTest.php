<?php
     
    include './includes/config.php';

    global $conn;
    global $conn2;


    if (isset($_GET['id']) AND isset($_GET['link'])){
        $table = $_GET['id'];
        $link = $_GET['link'];
        

        $query = mysqli_query($conn2, "DROP TABLE `$table`");

        if ($query) {
            
            $query2 = mysqli_query($conn, "DELETE FROM test_tb WHERE test_id = '$link'");
            

            if ($query2) {

                session_start();
                $_SESSION['success'] = "<div class='alert alert-danger'>Question Deleted</div>";

                header('Location: '.SITEURL.'lecturer/set-test.php');

            } else {
                echo "error in deleting id";
            }

        } else {
            echo "error in deleting table";
        }

    }


?>