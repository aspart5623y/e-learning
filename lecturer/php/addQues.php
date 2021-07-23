<?php 

    include '../includes/config.php';
    global $conn2;


    $question = mysqli_real_escape_string($conn2, $_POST['question']);
    $option_1 = mysqli_real_escape_string($conn2, $_POST['option_1']);
    $option_2 = mysqli_real_escape_string($conn2, $_POST['option_2']);
    $option_3 = mysqli_real_escape_string($conn2, $_POST['option_3']);
    $option_4 = mysqli_real_escape_string($conn2, $_POST['option_4']);
    $option_5 = mysqli_real_escape_string($conn2, $_POST['option_5']);
    $correct = mysqli_real_escape_string($conn2, $_POST['correct']);
    $table_name = mysqli_real_escape_string($conn2, $_POST['table_name']);
    $ques_id = 'e-learning/ques_id/'.date('dmy').time();



    if ($correct == 'a') {
        $correct = $option_1;
    } else if ($correct == 'b') {
        $correct = $option_2;
    } else if ($correct == 'c') {
        $correct = $option_3;
    } else if ($correct == 'd') {
        $correct = $option_4;
    } else if ($correct == 'e') {
        $correct = $option_5;
    }


    $insertQues = mysqli_query($conn2, "INSERT INTO `$table_name` (ques_id, question, answer_1, answer_2, answer_3, answer_4, answer_5, correct) VALUES ('$ques_id', '$question', '$option_1', '$option_2', '$option_3', '$option_4', '$option_5', '$correct')");

    if ($insertQues) {
        echo 'done';
    } else {
        echo 'error';
        echo mysqli_error($conn2);
    }

    


?>