<?php

    include '../includes/config.php';

    global $conn;
    session_start();
    $me = $_SESSION['user_id'];
    $getLecture = mysqli_query($conn, "SELECT * FROM lectures");

    $sn = 1;
    $value = "";

    if (mysqli_num_rows($getLecture) > 0) {
        $num = 0;
        
        while ($row = mysqli_fetch_assoc($getLecture)) {


            $c_name = $row['course_name'];
            $getCourseName = mysqli_query($conn, "SELECT * FROM courses WHERE course_id = '$c_name'");
            $course_name = mysqli_fetch_assoc($getCourseName);

            $searchReg = mysqli_query($conn, "SELECT * FROM course_reg WHERE course_id = '$c_name' AND student_id = '$me'");

            if (mysqli_num_rows($searchReg) < 1) {
                $num++;

                if ($num == mysqli_num_rows($getLecture)) {
                    $value .= '
                            <!-- Item -->
                            <tr>
                                <!-- serial number -->
                                <td colspan="5" class="text-center">You have not registered for any course</td>
                            </tr>
                        ';
                }

                continue;
            }

            $value .= '
                <!-- Item -->
                <tr>
                    <!-- serial number -->
                    <td>'.$sn++.'.</td>
                    <td>'.$row['title'].'</td>
                    <td>'.$row['description'].'</td>
                    <td>'.$course_name['course_name'].'</td>

                    <!-- open button -->
                    <td><a href="view-file.php?id='.$row['lecture_id'].'" class="btn alert-info">View Lecture</a></td>
                </tr>

            ';

        }

    } else {
        $value .= '
                <!-- Item -->
                <tr>
                    <!-- serial number -->
                    <td colspan="5" class="text-center">You have not uploaded any lectures</td>
                </tr>
            ';
    }

    echo $value;


?>