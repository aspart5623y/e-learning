<?php 
    include '../includes/config.php';

    global $conn;

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = md5(mysqli_real_escape_string($conn, $_POST['password']));
    
    
    $checkDB = mysqli_query($conn, 'SELECT * FROM users_table');

    if (mysqli_num_rows($checkDB) < 1) {
        $portal_id = 'e-learning/admin/'.date('d-m-y').time();
        $usertype = 'admin';
        $insertAdmin = mysqli_query($conn, "INSERT INTO users_table (portal_id, user_email, user_password, usertype) VALUES ('$portal_id', '$email', '$password', '$usertype')");

        if($insertAdmin) {
            session_start();    

            $_SESSION['user_id'] = $portal_id;
            $_SESSION['usertype'] = $usertype;

            echo SITEURL . "admin";
        } else {
            echo "Error in creating account";
        }
        
    } else {
        $checkEmail = mysqli_query($conn, "SELECT * FROM users_table WHERE user_email = '$email'");

        if (mysqli_num_rows($checkEmail) >= 1) {
            echo 'Email already exist!';
        } else {
            $portal_id = 'e-learning/student/'.date('d-m-y').time();
            $usertype = 'student';

            $insertStudent =  mysqli_query($conn, "INSERT INTO users_table (portal_id, user_email, user_password, usertype) VALUES ('$portal_id', '$email', '$password', '$usertype')");

            if($insertStudent){
                session_start();

                $_SESSION['user_id'] = $portal_id;
                $_SESSION['usertype'] = $usertype;
                echo SITEURL . "dashboard";
            } else {
                echo "Error in creating account";
            }

        }
    }
    
?>