<?php 


    include '../includes/config.php';

    global $conn;
    session_start();
    $me = $_SESSION['user_id'];
    $getQuestions = mysqli_query($conn, "SELECT * FROM questions");

    $sn = 0;
    $value = "";

    if (mysqli_num_rows($getQuestions) > 0) {

        while ($row = mysqli_fetch_assoc($getQuestions)) {
            $c_name = $row['course'];
            $getCourseName = mysqli_query($conn, "SELECT * FROM courses WHERE course_id = '$c_name'");
            $course_name = mysqli_fetch_assoc($getCourseName);

            

            $new_num = $sn++;

            if ($row['answer'] == '') {
                $button = '<a href="question-form.php?id='.$row['question_id'].'" class="btn btn-info">answer question</a>';
            } else {
                $button = '<p class="text-muted">This question has been answered</p>';
            }

            $value .= '
                <div class="card my-3">
                    <div class="card-header">
                        <a href="#ques'.$new_num.'" class="card-link d-block" data-toggle="collapse">
                            '.$row['question'].'
                        </a>
                    </div>
                    <div class="collapse" id="ques'.$new_num.'" data-parent="#accordion">
                        <div class="card-body">
                            <p>'.$row['answer'].'</p>
                            <small class="text-muted blockquote-footer">'.$course_name['course_name'].'</small>
                            
                        </div>
                    </div>
                    <div class="card-footer">
                        '.$button.'
                    </div>
                </div>

            ';

        }

    } else {
        $value .= '
                <!-- Item -->
                <p class="text-muted">there are no questions</p>
            ';
    }

    

    echo $value;


?>


