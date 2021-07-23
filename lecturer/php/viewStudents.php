<?php

    include '../includes/config.php';

    global $conn;
    session_start();
    $me = $_SESSION['user_id'];
    $getStudent = mysqli_query($conn, "SELECT * FROM users_table WHERE usertype = 'student'");

    $value = "";

    if (mysqli_num_rows($getStudent) > 0) {

        while ($row = mysqli_fetch_assoc($getStudent)) {
            
            $value .= '
                <div class="my-3">
                    <h5 class="font-weight-bold">'.$row['user_name'].'</h5>
                    <p class="text-muted">'.$row['user_email'].'</p>
                    <hr />
                </div>

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