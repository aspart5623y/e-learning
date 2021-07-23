<?php

    include '../includes/config.php';

    global $conn;
    session_start();
    $me = $_SESSION['user_id'];
    $getAssignment = mysqli_query($conn, "SELECT * FROM courses");

    $sn = 1;
    $value = "";

    if (mysqli_num_rows($getAssignment) > 0) {

        while ($row = mysqli_fetch_assoc($getAssignment)) {

            $mycourse = $row['course_id'];
            $checkReg = mysqli_query($conn, "SELECT * FROM course_reg WHERE course_id = '$mycourse' AND student_id = '$me'");

            if (mysqli_num_rows($checkReg) > 0) {
                $color = 'alert-danger';
                $text = 'unregister &nbsp; <i class="fas fa-times-circle text-danger"></i>';
                $action = 'delete';
            } else {
                $color = 'alert-success';
                $text = 'Register &nbsp; <i class="fas fa-check"></i>';
                $action = 'add';
            }
            
            $value .= '
                <!-- Item -->
                <tr>
                    <!-- serial number -->
                    <td>'.$sn++.'.</td>
                    <td>'.$row['course_name'].'</td>
                    <td>'.$row['course_title'].'</td>

                    <td><a href="course-action.php?id='.$me.'&course='.$row['course_id'].'&action='.$action.'" class="btn '.$color.'">'.$text.'</a></td>
                </tr>

            ';

        }

    } else {
        $value .= '
                <!-- Item -->
                <tr>
                    <!-- serial number -->
                    <td colspan="3" class="text-center">There are no courses in the database!</td>
                </tr>
            ';
    }

    echo $value;


?>