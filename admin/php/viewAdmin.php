<?php

    include '../includes/config.php';

    global $conn;
    session_start();
    $me = $_SESSION['user_id'];
    $getStudents = mysqli_query($conn, "SELECT * FROM users_table WHERE usertype = 'admin' AND portal_id != '$me'");

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
                    <td colspan="7" class="text-center">You are the only admin in the database</td>
                </tr>
            ';
    }

    echo $value;


?>