<?php

    include '../includes/config.php';

    global $conn;
    $getStudents = mysqli_query($conn, "SELECT * FROM courses");

    $sn = 1;
    $value = "";

    if (mysqli_num_rows($getStudents) > 0) {

        while ($row = mysqli_fetch_assoc($getStudents)) {
            $id_no = $row['course_lecturer'];

            $getLecturer = mysqli_query($conn, "SELECT * FROM users_table WHERE portal_id = '$id_no'");

            $lecturer = mysqli_fetch_assoc($getLecturer);

            if ($lecturer['user_name'] == "") {
                $name = $lecturer['user_email'];
            } else {
                $name = $lecturer['user_name'];
            }


            $value .= '
                <!-- Item -->
                <tr>
                    <!-- serial number -->
                    <td>'.$sn++.'.</td>
                    <td>'.$row['course_name'].'</td>
                    <td>'.$row['course_title'].'</td>
                    <td>'.$name.'</td>
                    
                    <!-- open button -->
                    <td>
                        <a href="deletecourse.php?id='.$row['course_id'].'" class="btn alert-danger px-5">Delete Course</a>
                    </td>
                </tr>
            ';

        }

    } else {
        $value .= '
                <!-- Item -->
                <tr>
                    <!-- serial number -->
                    <td colspan="4" class="text-center">There is no course in the database</td>
                </tr>
            ';
    }

    echo $value;





?>