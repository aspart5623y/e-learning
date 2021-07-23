<?php

    include '../includes/config.php';

    global $conn;

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = md5(mysqli_real_escape_string($conn, $_POST['password']));
    
    
    $checkEmail = mysqli_query($conn, "SELECT * FROM users_table WHERE user_email = '$email'");
    $checkDB = mysqli_query($conn, "SELECT * FROM users_table WHERE user_email = '$email' AND user_password = '$password'");

    if (mysqli_num_rows($checkEmail) < 1) { 
        echo "Email does not exist. Please register!";
    } else if (mysqli_num_rows($checkDB) > 0) {

        $row = mysqli_fetch_assoc($checkDB);

        session_start();

        
        $_SESSION['user_id'] = $row['portal_id'];
        $_SESSION['usertype'] = $row['usertype'];

        if ($row['usertype'] == "admin") {
            echo SITEURL . "admin";
        } else if ($row['usertype'] == "lecturer") {
            echo SITEURL . "lecturer";
        } else if ($row['usertype'] == "student") {
            echo SITEURL . "dashboard";
        }
        

    } else {
        echo "Incorrect Password";
    }

?>