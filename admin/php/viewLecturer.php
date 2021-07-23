<?php

    include '../includes/config.php';

    global $conn;
    $getStudents = mysqli_query($conn, "SELECT * FROM users_table WHERE usertype = 'lecturer'");

    $sn = 1;
    $value = "";

    if (mysqli_num_rows($getStudents) > 0) {

        while ($row = mysqli_fetch_assoc($getStudents)) {

            $value .= '
                <!-- Item -->
                <tr>
                    <!-- serial number -->
                    <td>'.$sn++.'.</td>
                    <td>'.$row['user_name'].'</td>
                    <td>'.$row['user_email'].'</td>
                    <td>'.$row['state_of_origin'].'</td>
                    <td>'.$row['lga'].'</td>

                    <!-- open button -->
                    <td><a href="user_details.php?id='.$row['portal_id'].'&type='.$row['usertype'].'" class="btn alert-info">View User Details</a></td>
                </tr>

            ';

        }

    } else {
        $value .= '
                <!-- Item -->
                <tr>
                    <!-- serial number -->
                    <td colspan="7" class="text-center">There is no Lecturer in the database</td>
                </tr>
            ';
    }

    echo $value;


?>