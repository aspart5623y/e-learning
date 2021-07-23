<?php 

    $answer = $error = '';


    if(isset($_POST['submitQues'])) {
        echo $ques_id;
       

        if (empty($_POST['answer'])) {
            $error = "enter your answer";
        } else {
            echo $answer = mysqli_real_escape_string($conn, $_POST['answer']);
        }

        if (strlen($answer) > 0) {

            $ansQuery = mysqli_query($conn, "UPDATE questions SET answer = '$answer' WHERE question_id = '$ques_id'");

            

            if($ansQuery) {
                header('Location: '. SITEURL . 'lecturer/classroom-question.php');
                $_SESSION['success'] = '<div class="alert alert-success">Your answer has been upload</div>';
            } else {
                $error = 'error';
            }

        }

    }


?>