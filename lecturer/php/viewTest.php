<?php

    include '../includes/config.php';

    global $conn;
    session_start();
    $me = $_SESSION['user_id'];
    $getLecture = mysqli_query($conn, "SELECT * FROM test_tb WHERE test_lecturer = '$me'");

    $sn = 1;
    $value = "";

    if (mysqli_num_rows($getLecture) > 0) {

        while ($row = mysqli_fetch_assoc($getLecture)) {
            $c_name = $row['test_course'];
            $getCourseName = mysqli_query($conn, "SELECT * FROM courses WHERE course_id = '$c_name'");
            $course_name = mysqli_fetch_assoc($getCourseName);

            $value .= '
                <!-- Item -->
                <tr>
                    <!-- serial number -->
                    <td>'.$sn++.'.</td>
                    <td>'.$row['test_title'].'</td>
                    <td>'.$course_name['course_name'].'</td>
                    <td>'.$row['test_status'].'</td>
                    <td>'.$row['test_date'].'</td>
                    <td>'.$row['test_time'].'</td>

                    <!-- open button -->
                    <td><a href="set-questions.php?id='.$row['test_id'].'&table='.$row['test_table'].'" class="btn alert-info">View Test</a></td>
                </tr>
            ';  
        }

    } else {
        $value .= '
                <!-- Item -->
                <tr>
                    <!-- serial number -->
                    <td colspan="7" class="text-center">You have not set any test</td>
                </tr>
            ';
    }

    echo $value;


?>