<?php

    include '../includes/config.php';

    global $conn;
    session_start();
    $me = $_SESSION['user_id'];
    $getAssignment = mysqli_query($conn, "SELECT * FROM courses WHERE course_lecturer = '$me'");

    $sn = 1;
    $value = "";

    if (mysqli_num_rows($getAssignment) > 0) {

        while ($row = mysqli_fetch_assoc($getAssignment)) {
            
            $value .= '
                <!-- Item -->
                <tr>
                    <!-- serial number -->
                    <td>'.$sn++.'.</td>
                    <td>'.$row['course_name'].'</td>
                    <td>'.$row['course_title'].'</td>

                </tr>

            ';

        }

    } else {
        $value .= '
                <!-- Item -->
                <tr>
                    <!-- serial number -->
                    <td colspan="3" class="text-center">You have not been allocated to handle a course yet</td>
                </tr>
            ';
    }

    echo $value;


?>