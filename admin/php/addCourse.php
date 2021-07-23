<?php 
    include '../includes/config.php';

    global $conn;

    $course = mysqli_real_escape_string($conn, $_POST['course']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $lecturer = mysqli_real_escape_string($conn, $_POST['lecturer']);
    
    
    // $checkDB = mysqli_query($conn, 'SELECT * FROM users_table');

    
    $checkCourse = mysqli_query($conn, "SELECT * FROM courses WHERE course_name = '$course'");

    if (mysqli_num_rows($checkCourse) >= 1) {
        echo 'Course already exist!';
    } else {
        $course_id = 'e-learning/course/'.date('d-m-y').time();

        $insertCourse = mysqli_query($conn, "INSERT INTO courses (course_id, course_name, course_title, course_lecturer) VALUES ('$course_id', '$course', '$title', '$lecturer')");

        if($insertCourse){ 
            session_start(); 

            $_SESSION['success'] = "<div class='alert alert-success'>Course added successfully</div>";
            echo "done";
            
        } else {
            echo "Error in adding course!";
        }

        
    }
    
?>