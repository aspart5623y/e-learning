<?php

    include '../includes/config.php';

    global $conn;
    session_start();
    $me = $_SESSION['user_id'];
    $getAssignment = mysqli_query($conn, "SELECT * FROM assignment WHERE course_lecturer = '$me'");

    $sn = 1;
    $value = "";

    if (mysqli_num_rows($getAssignment) > 0) {

        while ($row = mysqli_fetch_assoc($getAssignment)) {
            $c_name = $row['course_name'];
            $getCourseName = mysqli_query($conn, "SELECT * FROM courses WHERE course_id = '$c_name'");
            $course_name = mysqli_fetch_assoc($getCourseName);

            $value .= '
                <!-- Item -->
                <tr>
                    <!-- serial number -->
                    <td>'.$sn++.'.</td>
                    <td>'.$row['ass_title'].'</td>
                    <td>'.$row['ass_desc'].'</td>
                    <td>'.$course_name['course_name'].'</td>

                    <!-- open button -->
                    <td><a href="view-ass.php?id='.$row['ass_id'].'" class="btn alert-info">View assignment</a></td>
                </tr>

            ';

        }

    } else {
        $value .= '
                <!-- Item -->
                <tr>
                    <!-- serial number -->
                    <td colspan="5" class="text-center">You have not uploaded any assignment</td>
                </tr>
            ';
    }

    echo $value;


?>