<?php 
    include '../includes/config.php';

    global $conn;

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = md5(mysqli_real_escape_string($conn, $_POST['password']));
    
    
    $checkDB = mysqli_query($conn, 'SELECT * FROM users_table');

    
    $checkEmail = mysqli_query($conn, "SELECT * FROM users_table WHERE user_email = '$email'");

    if (mysqli_num_rows($checkEmail) >= 1) {
        echo 'Email already exist!';
    } else {
        $portal_id = 'e-learning/admin/'.date('d-m-y').time();
        $usertype = 'admin';

        $insertStudent =  mysqli_query($conn, "INSERT INTO users_table (portal_id, user_email, user_password, usertype) VALUES ('$portal_id', '$email', '$password', '$usertype')");

        if($insertStudent){
            session_start();

            $_SESSION['success'] = "<div class='alert alert-success'>Admin added successfully</div>";
            echo "done";
            
        } else {
            echo "Error in creating account";
        }

        
    }
    
?>