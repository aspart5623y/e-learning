<?php 

    $course = $question = $error = '';

    if(isset($_POST['submitQues'])) {

        if (empty($_POST['course'])) {
            $error = "select a course";
        } else {
            $course = mysqli_real_escape_string($conn, $_POST['course']);
        }

        if (empty($_POST['question'])) {
            $error = "ask your question";
        } else {
            $question = mysqli_real_escape_string($conn, $_POST['question']);
        }

        if (strlen($question) > 0 AND strlen($course) > 0) {
            $question_id = 'e-learning/question/'.date('dmy').time();

            $quesQuery = mysqli_query($conn, "INSERT INTO questions (question_id, student_id, course, question) VALUES ('$question_id', '$user_id', '$course', '$question')");
            
            if($quesQuery) {
                header('Location: '. SITEURL . 'dashboard/ask-question.php');
                $_SESSION['success'] = '<div class="alert alert-success">Your question has been sent to your lecturer. You\'ll recieve the answer when your question has been answered.</div>';
            } else {
                $error = 'error';
            }

        }


        

    }






?>