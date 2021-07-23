<?php 

    include '../includes/config.php';

    global $conn;
    session_start();
    $me = $_SESSION['user_id'];


    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $course = mysqli_real_escape_string($conn, $_POST['course']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $time = mysqli_real_escape_string($conn, $_POST['time']);
    $test_id = 'e-learning/test/'.time().date('dmy');
    $tb_name = $course . '_' . $title;



    $insertTest = mysqli_query($conn, "INSERT INTO test_tb (test_id, test_title, test_course, test_date, test_time, test_lecturer, test_table) VALUES ('$test_id', '$title', '$course', '$date', '$time', '$me', '$tb_name')");

    if ($insertTest) {
        $create_table = "
            CREATE TABLE `".$tb_name."` (
                id INT(50) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                ques_id VARCHAR(255) NOT NULL,
                question VARCHAR(255) NOT NULL,
                answer_1 VARCHAR(255) NOT NULL,
                answer_2 VARCHAR(255) NOT NULL,
                answer_3 VARCHAR(255) NOT NULL,
                answer_4 VARCHAR(255) NOT NULL,
                answer_5 VARCHAR(255) NOT NULL,
                correct VARCHAR(255) NOT NULL
            )
        ";

        if (mysqli_query($conn2, $create_table)) {
            echo SITEURL . 'lecturer/set-questions.php?id='.$test_id.'&table='.$tb_name.'';
        } else {  
            echo 'Error in creating table';
        }

    } else {
        echo "error";
    }







?>