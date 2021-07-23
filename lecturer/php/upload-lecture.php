<?php 

    $title = $desc = $course_name = $error = "";
    

    if(isset($_POST['addLectureBtn'])) {
        
        if (empty($_POST['lecture_title'])){
            $error = "Please enter a lecture title";
        } else {
            $title = $_POST['lecture_title'];
        }

        if (empty($_POST['lecture_desc'])){
            $error = "Please enter a lecture description";
        } else {
            $desc = $_POST['lecture_desc'];
        }
        
        if (empty($_POST['course'])){
            $error = "Please select course name";
        } else {
            $course_name = $_POST['course'];
        }



        if (isset($_FILES['lecture_file']['name'])) {
            $document = $_FILES['lecture_file']['name'];

            if ($document != "") {
                $explode = explode('.', $document);
                $ext = end($explode);
                if ($ext == 'zip') {
                    $document = 'lecture-'.$title."-".date('dmy').time().".".$ext;

                    $src = $_FILES['lecture_file']['tmp_name'];
                    $dst = "../materials/".$document;
                    $upload = move_uploaded_file($src, $dst);

                    if ($upload == false) {

                        $error = "Failed to upload";
                        die();
                        
                    } else {
                        $lecture_id = 'e-learning/lecture/'.date('d-m-y').time();
                        $lecturer = $_SESSION['user_id'];


                        $query = mysqli_query($conn, "INSERT INTO lectures (lecture_id, course_lecturer, course_name, course_file, title, description) VALUES ('$lecture_id', '$lecturer', '$course_name', '$document', '$title', '$desc')");

                        if ($query) {
                            $_SESSION['success'] = "<div class='alert alert-success'>lecture uploaded successfully</div>";


                            header('Location: ' . SITEURL . 'lecturer/classroom-lectures.php');
                        }

                    }


                } else {
                    $error = "The file you uploaded is not in zip format";
                }
               
            } else {
                $error = "Upload a zipped file of your lecture!";
            }

        } else {
            $error = "Please upload a zipped file of your lecture";
        }




    }
    
?>